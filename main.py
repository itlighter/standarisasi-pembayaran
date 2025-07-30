import tkinter as tk
from tkinter import messagebox
import pyautogui
import keyboard
from PIL import ImageGrab, Image, ImageTk
import time
import numpy as np
import cv2

# ---------------------------- Global State ----------------------------
automation_running = False
minigame_area = None
pan_empty_color = (140, 140, 140)
cycle_count = 0
pan_full_coord = None
pan_empty_coord = None
status_overlay = None
status_overlay_label = None
status_overlay_visible = False

# ---------------------------- Real-Time Detection Loop ----------------------------
def automation_loop():
    if not automation_running:
        return
    update_status("[\U0001f501] Checking pan state...")
    root.after(100, check_pan_state)

def check_pan_state():
    if not automation_running:
        return

    current_color = pyautogui.screenshot().getpixel(pan_empty_coord)

    if current_color == pan_empty_color:
        update_status("[\u26cf\ufe0f] Pan empty. Starting Digging Phase")
        root.after(100, start_digging_phase)
    else:
        update_status("[\U0001f30a] Pan already full. Starting Panning Phase")
        root.after(100, start_panning_phase)

def start_digging_phase():
    if not automation_running or not minigame_area:
        update_status("[!] Minigame area not set!")
        return

    update_status("[>] Holding mouse for digging...")
    pyautogui.mouseDown()
    root.after(100, lambda: check_green_zone_attempt(0))

def check_green_zone_attempt(attempt):
    if not automation_running:
        return

    if attempt >= 150:
        pyautogui.mouseUp()
        update_status("[!] Green zone not found. Retrying...")
        root.after(1500, automation_loop)
        return

    x, y, w, h = minigame_area
    screenshot = ImageGrab.grab(bbox=(x, y, x + w, y + h))
    img_bgr = cv2.cvtColor(np.array(screenshot), cv2.COLOR_RGB2BGR)
    gray = cv2.cvtColor(img_bgr, cv2.COLOR_BGR2GRAY)
    hsv_img = cv2.cvtColor(img_bgr, cv2.COLOR_BGR2HSV)

    bar_pos = find_line_position(gray, sensitivity_threshold=sensitivity_var.get())
    now = time.time()
    velocity = velocity_calc.add_position(bar_pos, now)

    green_mask, _ = detect_by_otsu_with_area_filter(hsv_img, min_area=30, morph_kernel_size=3)
    green_columns = np.any(green_mask > 0, axis=0)
    green_indices = np.where(green_columns)[0]

    if len(green_indices) == 0 or bar_pos == -1:
        root.after(10, lambda: check_green_zone_attempt(attempt + 1))
        return

    green_center = int(np.mean(green_indices))
    predicted_pos, t_until = velocity_calc.predict_position(bar_pos, green_center, now)

    confidence = velocity_calc.get_prediction_confidence(
        bar_pos, green_center, predicted_pos, t_until, fps=60
    )

    if confidence >= 0.7 and 0 < t_until < 1.0:
        update_status(f"[\u231b] Predict release in {t_until:.2f}s (conf {confidence:.2f})")
        root.after(int(t_until * 1000), release_mouse_in_green_zone)
    else:
        root.after(10, lambda: check_green_zone_attempt(attempt + 1))

def release_mouse_in_green_zone():
    pyautogui.mouseUp()
    update_status("[✔] Released in green zone (predicted)!")
    root.after(1500, automation_loop)

def start_panning_phase():
    if not automation_running:
        return

    pyautogui.keyDown('a')
    root.after(750, continue_panning)

def continue_panning():
    pyautogui.keyUp('a')
    pyautogui.click()
    pyautogui.mouseDown()
    update_status("[\U0001f30a] Holding mouse to empty pan...")
    root.after(500, check_panning_done)

def check_panning_done():
    if not automation_running:
        return

    current_color = pyautogui.screenshot().getpixel(pan_empty_coord)
    if current_color == pan_empty_color:
        pyautogui.mouseUp()
        global cycle_count
        cycle_count += 1
        update_status(f"[✔] Panning complete. Cycles Completed: {cycle_count}")
        root.after(1000, automation_loop)
    else:
        root.after(200, check_panning_done)

# ---------------------------- UI + Overlay ----------------------------
def start_area_selection():
    def on_mouse_down(event):
        nonlocal start_x, start_y, rect
        start_x = canvas.canvasx(event.x)
        start_y = canvas.canvasy(event.y)
        rect = canvas.create_rectangle(start_x, start_y, start_x, start_y, outline='red', width=2)

    def on_mouse_drag(event):
        cur_x = canvas.canvasx(event.x)
        cur_y = canvas.canvasy(event.y)
        canvas.coords(rect, start_x, start_y, cur_x, cur_y)

    def on_mouse_up(event):
        end_x = canvas.canvasx(event.x)
        end_y = canvas.canvasy(event.y)
        x1, y1 = int(min(start_x, end_x)), int(min(start_y, end_y))
        x2, y2 = int(max(start_x, end_x)), int(max(start_y, end_y))
        width, height = x2 - x1, y2 - y1

        global minigame_area
        minigame_area = (x1, y1, width, height)
        print("[+] Minigame area set to:", minigame_area)
        messagebox.showinfo("Minigame Area", f"Minigame area set to: {minigame_area}")
        overlay.destroy()
        root.deiconify()

    try:
        root.withdraw()
    except:
        pass

    overlay = tk.Tk()
    overlay.attributes("-fullscreen", True)
    overlay.attributes("-alpha", 0.3)
    overlay.configure(bg="black")
    overlay.title("Select Minigame Area")

    canvas = tk.Canvas(overlay, cursor="cross", bg="black", highlightthickness=0)
    canvas.pack(fill=tk.BOTH, expand=True)

    start_x = start_y = rect = None

    canvas.bind("<ButtonPress-1>", on_mouse_down)
    canvas.bind("<B1-Motion>", on_mouse_drag)
    canvas.bind("<ButtonRelease-1>", on_mouse_up)

    print("[+] Press and drag to select the minigame area")
    overlay.mainloop()

def select_pan_coords():
    coords = []
    def on_click(event):
        x, y = event.x_root, event.y_root
        coords.append((x, y))
        canvas.create_oval(x - 5, y - 5, x + 5, y + 5, outline='lime', width=2)
        if len(coords) == 2:
            finalize()
    def finalize():
        global pan_empty_coord, pan_full_coord
        pan_empty_coord = coords[0]
        pan_full_coord = coords[1]
        print("[+] Pan Empty Coord set to:", pan_empty_coord)
        print("[+] Pan Full Coord set to:", pan_full_coord)
        messagebox.showinfo("Pan Coords Set", f"Empty: {pan_empty_coord}\nFull: {pan_full_coord}")
        overlay.destroy()
        root.deiconify()

    try:
        root.withdraw()
    except:
        pass

    overlay = tk.Tk()
    overlay.attributes("-fullscreen", True)
    overlay.attributes("-alpha", 0.3)
    overlay.configure(bg="black")
    overlay.title("Set Pan Coords")

    canvas = tk.Canvas(overlay, cursor="cross", bg="black", highlightthickness=0)
    canvas.pack(fill=tk.BOTH, expand=True)
    canvas.bind("<Button-1>", on_click)

    messagebox.showinfo("Select Pan Coords", "Click once on the EMPTY pan bar pixel,\nthen once on the FULL pan bar pixel.")
    overlay.mainloop()

def update_overlay_status(text):
    global status_overlay, status_overlay_label, overlay_image_label

    if not status_overlay_visible:
        return

    if status_overlay is None:
        status_overlay = tk.Toplevel()
        status_overlay.overrideredirect(True)
        status_overlay.attributes("-topmost", True)
        status_overlay.configure(bg="black")

        make_overlay_draggable(status_overlay)

        status_overlay_label = tk.Label(
            status_overlay, text=text, fg="lime", bg="black",
            font=("Consolas", 12, "bold"), justify="left")
        status_overlay_label.pack(pady=(5, 0), anchor="w")

        global overlay_image_label, velocity_canvas
        overlay_image_label = tk.Label(status_overlay, bg="black")
        overlay_image_label.pack(pady=(5, 5))

        velocity_canvas = tk.Canvas(status_overlay, width=200, height=60, bg="black", highlightthickness=0)
        velocity_canvas.pack()
    else:
        status_overlay_label.config(text=text)

    if minigame_area:
        x1, y1, width, height = minigame_area
        x2 = x1 + width
        y2 = y1 + height

        screenshot = ImageGrab.grab(bbox=(x1, y1, x2, y2))
        img_bgr = cv2.cvtColor(np.array(screenshot), cv2.COLOR_RGB2BGR)
        gray = cv2.cvtColor(img_bgr, cv2.COLOR_BGR2GRAY)
        hsv = cv2.cvtColor(img_bgr, cv2.COLOR_BGR2HSV)

        green_mask, _ = detect_by_otsu_with_area_filter(hsv, min_area=30)
        green_columns = np.any(green_mask > 0, axis=0)
        green_indices = np.where(green_columns)[0]

        if len(green_indices) > 0:
            x_start = int(min(green_indices))
            x_end = int(max(green_indices))
            cv2.rectangle(img_bgr, (x_start, 0), (x_end, img_bgr.shape[0]), (0, 255, 0), 2)
            cv2.putText(img_bgr, "Green Zone", (x_start + 5, 15),
                        cv2.FONT_HERSHEY_SIMPLEX, 0.5, (0, 255, 0), 1, cv2.LINE_AA)

        bar_x = find_line_position(gray, sensitivity_threshold=sensitivity_var.get())
        if bar_x != -1:
            cv2.line(img_bgr, (bar_x, 0), (bar_x, img_bgr.shape[0]), (255, 255, 255), 2)
            cv2.circle(img_bgr, (bar_x, img_bgr.shape[0] // 2), 4, (255, 255, 255), -1)
            cv2.putText(img_bgr, "Bar", (bar_x + 5, 20),
                        cv2.FONT_HERSHEY_SIMPLEX, 0.5, (255, 255, 255), 1, cv2.LINE_AA)

        img_rgb = cv2.cvtColor(img_bgr, cv2.COLOR_BGR2RGB)
        tk_img = ImageTk.PhotoImage(Image.fromarray(img_rgb))

        overlay_image_label.config(image=tk_img)
        overlay_image_label.image = tk_img

        # Resize overlay window to match
        status_overlay.geometry(f"{img_rgb.shape[1]+20}x{img_rgb.shape[0]+100}+50+50")

        draw_velocity_graph()

def draw_velocity_graph():
    if not velocity_canvas:
        return
    velocity_canvas.delete("all")
    current_velocity = velocity_calc.calculate_velocity()
    velocity_history.append(current_velocity)
    if len(velocity_history) > 50:
        velocity_history.pop(0)

    max_v = max(max(velocity_history), 50)
    scale = 50 / max_v if max_v else 1

    for i in range(1, len(velocity_history)):
        x1 = (i - 1) * 4
        y1 = 60 - velocity_history[i - 1] * scale
        x2 = i * 4
        y2 = 60 - velocity_history[i] * scale
        velocity_canvas.create_line(x1, y1, x2, y2, fill="lime")

def refresh_overlay_image():
    if status_overlay_visible:
        update_overlay_status(status_var.get())
        status_overlay.after(500, refresh_overlay_image)

def toggle_status_overlay():
    global status_overlay, status_overlay_visible

    if status_overlay_visible:
        if status_overlay:
            status_overlay.destroy()
            status_overlay = None
        status_overlay_visible = False
    else:
        status_overlay_visible = True
        update_overlay_status(status_var.get())
        refresh_overlay_image()

# ---------------------------- UI Setup ----------------------------
def make_overlay_draggable(widget):
    def start_drag(event): widget.x, widget.y = event.x, event.y
    def do_drag(event): widget.geometry(f"+{widget.winfo_x() + event.x - widget.x}+{widget.winfo_y() + event.y - widget.y}")
    widget.bind("<Button-1>", start_drag)
    widget.bind("<B1-Motion>", do_drag)

def start_bot():
    global automation_running
    if not minigame_area or not pan_empty_coord or not pan_full_coord:
        messagebox.showerror("Missing Calibration", "Please select minigame area and pan coords.")
        return
    automation_running = True
    start_button.config(state="disabled")
    stop_button.config(state="normal")
    automation_loop()

def stop_bot():
    global automation_running
    automation_running = False
    start_button.config(state="normal")
    stop_button.config(state="disabled")

def update_status(text):
    status_var.set(text)
    if status_overlay_visible:
        update_overlay_status(f"State: {'Running' if automation_running else 'Stopped'}\nStatus: {text}")

# ---------------------------- GUI Setup ----------------------------
root = tk.Tk()
sensitivity_var = tk.IntVar(value=50)
root.title("\u26cf\ufe0f Dig + Pan Bot")
root.geometry("420x400")
root.configure(bg="#1e1e1e")

btn_style = {"font": ("Segoe UI", 11, "bold"), "fg": "white", "bg": "#3a3a3a",
             "activebackground": "#505050", "activeforeground": "white", "bd": 0,
             "relief": "flat", "height": 2, "cursor": "hand2"}

label_style = {"font": ("Segoe UI", 11), "fg": "#ffffff", "bg": "#1e1e1e"}

status_bar_style = {"font": ("Consolas", 10), "fg": "#00ff88", "bg": "#101010",
                    "anchor": "w", "relief": "sunken", "bd": 1, "height": 2}

select_area_button = tk.Button(root, text="\U0001f4f7 Select Minigame Area (F4)", command=start_area_selection, **btn_style)
pan_coords_button = tk.Button(root, text="\U0001f5b1\ufe0f Set Pan Coords (2 Clicks)", command=select_pan_coords, **btn_style)
start_button = tk.Button(root, text="\u25b6 Start", command=start_bot, **btn_style)
stop_button = tk.Button(root, text="\u26d4 Stop", command=stop_bot, **btn_style, state="disabled")

status_var = tk.StringVar()
status_var.set("Waiting for input...")
status_label = tk.Label(root, textvariable=status_var, **status_bar_style)

select_area_button.pack(fill="x", padx=20, pady=(20, 10))
pan_coords_button.pack(fill="x", padx=20, pady=5)
start_button.pack(fill="x", padx=20, pady=5)
stop_button.pack(fill="x", padx=20, pady=5)

# Sensitivity Slider
tk.Label(root, text="\U0001f39a\ufe0f Sensitivity", **label_style).pack()
tk.Scale(root, from_=10, to=100, orient="horizontal", variable=sensitivity_var,
         bg="#1e1e1e", fg="white", troughcolor="#444444", highlightthickness=0).pack(fill="x", padx=20)

status_label.pack(fill="x", side="bottom", pady=10, padx=10)

keyboard.add_hotkey("F4", start_area_selection)
keyboard.add_hotkey("z", lambda: stop_bot() if automation_running else start_bot())
keyboard.add_hotkey("f3", toggle_status_overlay)

root.mainloop()
