import cv2
import numpy as np
import tkinter as tk
from tkinter import messagebox
from PIL import ImageGrab, Image, ImageTk
import keyboard
import threading
import pyautogui

green_zone_y_range = None
minigame_area = None


def detect_white_line(image):
    lower_white = np.array([245, 245, 245])
    upper_white = np.array([255, 255, 255])
    mask = cv2.inRange(image, lower_white, upper_white)

    mask = cv2.morphologyEx(mask, cv2.MORPH_OPEN, np.ones((3, 3), np.uint8))
    contours, _ = cv2.findContours(mask, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

    lines = []
    for cnt in contours:
        x, y, w, h = cv2.boundingRect(cnt)
        if 2 <= h <= 5 and w >= 10:
            lines.append((x, y, w, h))
    return lines


def start_green_zone_selection():
    def on_mouse_down(event):
        nonlocal start_y, rect
        start_y = canvas.canvasy(event.y)
        rect = canvas.create_rectangle(0, start_y, overlay.winfo_screenwidth(), start_y, outline='lime', width=2)

    def on_mouse_drag(event):
        cur_y = canvas.canvasy(event.y)
        canvas.coords(rect, 0, start_y, overlay.winfo_screenwidth(), cur_y)

    def on_mouse_up(event):
        end_y = canvas.canvasy(event.y)
        y1, y2 = int(min(start_y, end_y)), int(max(start_y, end_y))
        global green_zone_y_range
        green_zone_y_range = (y1, y2)
        print("[+] Green zone Y-range set to:", green_zone_y_range)
        overlay.destroy()

    overlay = tk.Tk()
    overlay.attributes("-fullscreen", True)
    overlay.attributes("-alpha", 0.3)
    overlay.attributes("-topmost", True)
    overlay.configure(bg="black")
    overlay.title("Select Green Zone Y Range")

    canvas = tk.Canvas(overlay, cursor="arrow", bg="black", highlightthickness=5)
    canvas.pack(fill=tk.BOTH, expand=True)

    start_y = rect = None
    canvas.bind("<ButtonPress-1>", on_mouse_down)
    canvas.bind("<B1-Motion>", on_mouse_drag)
    canvas.bind("<ButtonRelease-1>", on_mouse_up)

    print("[+] Drag to select green zone height")
    overlay.mainloop()


def start_minigame_area_selection():
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
        global minigame_area
        minigame_area = (x1, y1, x2, y2)
        print("[+] Minigame area set to:", minigame_area)
        overlay.destroy()

    overlay = tk.Tk()
    overlay.attributes("-fullscreen", True)
    overlay.attributes("-alpha", 0.3)
    overlay.attributes("-topmost", True)
    overlay.configure(bg="black")
    overlay.title("Select Minigame Area")

    canvas = tk.Canvas(overlay, cursor="cross", bg="black", highlightthickness=5)
    canvas.pack(fill=tk.BOTH, expand=True)

    start_x = start_y = rect = None
    canvas.bind("<ButtonPress-1>", on_mouse_down)
    canvas.bind("<B1-Motion>", on_mouse_drag)
    canvas.bind("<ButtonRelease-1>", on_mouse_up)

    print("[+] Drag to select minigame area")
    overlay.mainloop()


def show_detection_overlay():
    if not minigame_area or not green_zone_y_range:
        print("[!] Set minigame area (F4) and green zone (F5) first.")
        return

    x1, y1, x2, y2 = minigame_area
    gy1, gy2 = green_zone_y_range
    minigame_area_height = y2 - y1

    overlay = tk.Tk()
    overlay.geometry(f"30x{minigame_area_height}+1024+500")
    overlay.configure(bg="black")
    overlay.title("Live Detection")

    canvas = tk.Canvas(overlay, bg="black", highlightthickness=0)
    canvas.pack(fill=tk.BOTH, expand=True)

    label = tk.Label(canvas)
    label.pack()

    def update_frame():
        screen = ImageGrab.grab(bbox=(x1, y1, x2, y2))
        frame = cv2.cvtColor(np.array(screen), cv2.COLOR_RGB2BGR)

        # Draw green zone
        cv2.rectangle(frame, (0, gy1), (frame.shape[1], gy2), (0, 0, 0), 2)

        # Detect white lines
        lines = detect_white_line(frame)
        for (lx, ly, lw, lh) in lines:
            cv2.rectangle(frame, (lx, ly), (lx + lw, ly + lh), (0, 255, 0), 1)

            if gy1 <= ly <= gy2 + 3:
                print("[✔] White line in/near green zone → CLICK")
                pyautogui.click(x=(x1 + x2) // 2, y=(y1 + y2) // 2)
                break  # Avoid multiple clicks per frame

        # Convert to PhotoImage and show
        img = Image.fromarray(cv2.cvtColor(frame, cv2.COLOR_BGR2RGB))
        imgtk = ImageTk.PhotoImage(image=img)
        label.imgtk = imgtk
        label.configure(image=imgtk)

        overlay.after(10, update_frame)

    update_frame()
    overlay.mainloop()


# ---------- Hotkeys ----------
root = tk.Tk()
root.withdraw()  # Hide the root window

keyboard.add_hotkey("F4", start_minigame_area_selection)
keyboard.add_hotkey("F5", start_green_zone_selection)
keyboard.add_hotkey("F6", show_detection_overlay)
keyboard.add_hotkey("esc", lambda: root.quit())

print("[*] Press F4 to select minigame area")
print("[*] Press F5 to select green zone")
print("[*] Press F6 to start detection overlay (press ESC to exit)")

# Wait until ESC is pressed
root.mainloop()
