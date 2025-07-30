(function () {
    var url = window.location.href;
    if (url.includes('#')) {
        var activeTab = url.substring(url.indexOf("#") + 1);
        var activeTab1 = activeTab.slice(0, -4);
        $(".tab-pane").removeClass("show active");
        $(".nav-link").removeClass("active");
        $("#" + activeTab).addClass("active");
        $("#" + activeTab1).addClass("show active");
    }
})();

// Collapse mapping for sidebar pills and submenus
var sidebarMenus = [
    { pill: "v-pills-informasi-tab", collapse: "submenu-informasi" },
    { pill: "v-pills-petunjuk-tab", collapse: "submenu-petunjuk" },
    { pill: "v-pills-perpajakan-tab", collapse: "submenu-perpajakan" },
    { pill: "v-pills-open-tab", collapse: "submenu-open" },
    { pill: "v-pills-buktipotong-tab", collapse: "submenu-buktipotong" }
];

var collapseInstances = {};
$.each(sidebarMenus, function (_, menu) {
    var $pillEl = $("#" + menu.pill);
    var $collapseEl = $("#" + menu.collapse);
    if ($pillEl.length && $collapseEl.length) {
        collapseInstances[menu.collapse] = new bootstrap.Collapse($collapseEl[0], { toggle: false });
        $pillEl.on("click", function () {
            // Hide all other collapses
            $.each(collapseInstances, function (key, instance) {
                if (key !== menu.collapse) {
                    instance.hide();
                }
            });
            // Toggle the clicked one
            collapseInstances[menu.collapse].toggle();
        });
    }
});