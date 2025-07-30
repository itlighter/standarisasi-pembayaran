// Handle tab from URL hash
(function () {
    // Only run this code if user is on dashboard page
    if (window.location.pathname.includes('/dashboard')) {
        var url = window.location.href;
        if (/#\w+/.test(url)) {
            var activeTab = url.substring(url.indexOf("#") + 1);
            var activeTab1 = activeTab.slice(0, -4);
            $(".tab-pane").removeClass("show active");
            $(".nav-link").removeClass("active");
            $("#" + activeTab).addClass("active");
            $("#" + activeTab1).addClass("show active");
        }
    }
})();

(async function () {
    if (window.location.pathname.includes('/dashboard')) {
        const keyHex = "603deb1015ca71be2b73aef0857d7781"; // 16 bytes (AES-128-GCM)

        // Encrypt using AES-GCM
        const syarat = await encryptDataGCM("syarat", keyHex);
        const penginputan = await encryptDataGCM("penginputan", keyHex);
        const link = $(".url");
        const stb = link.slice(0, 2);
        const sstb = link.slice(-2);
        const stbHrefs = [
            window.location.origin + "/dashboard/sewa/3?page=stb&tab=" + encodeURIComponent(syarat),
            window.location.origin + "/dashboard/sewa/3?page=stb&tab=" + encodeURIComponent(penginputan)
        ];
        $(stb).each(function(index){
            $(this).attr('href', stbHrefs[index]);
        });
        const sstbHrefs = [
            window.location.origin + "/dashboard/sewa/3?page=sstb&tab=" + encodeURIComponent(syarat),
            window.location.origin + "/dashboard/sewa/3?page=sstb&tab=" + encodeURIComponent(penginputan)
        ];
        $(sstb).each(function(index){
            $(this).attr('href', sstbHrefs[index]);
        });
    }

    // Encrypt with AES-128-GCM, returns base64-encoded JSON string
    async function encryptDataGCM(plaintext, keyHex) {
        const key = await crypto.subtle.importKey(
            "raw",
            hexToBytes(keyHex),
            { name: "AES-GCM" },
            false,
            ["encrypt"]
        );

        const iv = crypto.getRandomValues(new Uint8Array(12)); // 12-byte IV for GCM
        const encoder = new TextEncoder();
        const data = encoder.encode(plaintext);

        const encrypted = await crypto.subtle.encrypt({ name: "AES-GCM", iv: iv }, key, data);
        const encryptedBytes = new Uint8Array(encrypted);

        const encryptedJson = {
            iv: bytesToHex(iv),
            data: bytesToHex(encryptedBytes)
        };

        return btoa(JSON.stringify(encryptedJson));
    }

    function hexToBytes(hex) {
        return new Uint8Array(hex.match(/[\da-f]{2}/gi).map(h => parseInt(h, 16)));
    }

    function bytesToHex(bytes) {
        return Array.from(bytes).map(b => b.toString(16).padStart(2, '0')).join('');
    }

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        const results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
})();

(async function () {
    if (window.location.pathname.includes('/dashboard')) {
        const keyHex = "603deb1015ca71be2b73aef0857d7781"; // 16 bytes (AES-128-GCM)

        // Encrypt using AES-GCM
        const syarat = await encryptDataGCM("syarat", keyHex);
        const penginputan = await encryptDataGCM("penginputan", keyHex);
        const pajak = await encryptDataGCM("pajak", keyHex);
        const form = await encryptDataGCM("form", keyHex);

        const getPageValue = getUrlParameter('page');

        if (getPageValue.length > 0 && getPageValue == 'stb') {
            const sstbCollapse = $("#sstb");
            const link = sstbCollapse.find("a[href='#']");
            const hrefs = [
                "?page=sstb&tab=" + encodeURIComponent(syarat),
                "?page=sstb&tab=" + encodeURIComponent(penginputan),
                "?page=sstb&tab=" + encodeURIComponent(pajak),
                "?page=sstb&tab=" + encodeURIComponent(form)
            ];
            $(link).each(function(index){
                $(this).attr('href', hrefs[index]);
            });

        } else if (getPageValue.length > 0 && getPageValue == 'sstb') {
            const getTabValue = getUrlParameter('tab');
            const previousPage = document.referrer;

            const sstbCollapse = $("#stb");
            const link = sstbCollapse.find("a[href='#']");
            const hrefs = [
                "?page=stb&tab=" + encodeURIComponent(syarat),
                "?page=stb&tab=" + encodeURIComponent(penginputan),
                "?page=stb&tab=" + encodeURIComponent(pajak),
                "?page=stb&tab=" + encodeURIComponent(form)
            ];
            $(link).each(function(index){
                $(this).attr('href', hrefs[index]);
            });
        }
    }

    // Encrypt with AES-128-GCM, returns base64-encoded JSON string
    async function encryptDataGCM(plaintext, keyHex) {
        const key = await crypto.subtle.importKey(
            "raw",
            hexToBytes(keyHex),
            { name: "AES-GCM" },
            false,
            ["encrypt"]
        );

        const iv = crypto.getRandomValues(new Uint8Array(12)); // 12-byte IV for GCM
        const encoder = new TextEncoder();
        const data = encoder.encode(plaintext);

        const encrypted = await crypto.subtle.encrypt({ name: "AES-GCM", iv: iv }, key, data);
        const encryptedBytes = new Uint8Array(encrypted);

        const encryptedJson = {
            iv: bytesToHex(iv),
            data: bytesToHex(encryptedBytes)
        };

        return btoa(JSON.stringify(encryptedJson));
    }

    function hexToBytes(hex) {
        return new Uint8Array(hex.match(/[\da-f]{2}/gi).map(h => parseInt(h, 16)));
    }

    function bytesToHex(bytes) {
        return Array.from(bytes).map(b => b.toString(16).padStart(2, '0')).join('');
    }

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        const results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
})();

(async function () {
    var tabs;
    if (window.location.pathname.includes('/dashboard/sewa')) {
        const keyHex = "603deb1015ca71be2b73aef0857d7781"; // 16 bytes (AES-128-GCM)
        $('.nav-link[data-bs-toggle="pill"]').on('click', async function() {
            tabs = this;
            var param = "tab";
            const url = new URL(window.location.href);
            const params = url.searchParams;
            let value = $(tabs).attr("aria-controls");
            value = value.substring(value.indexOf("pills-") + 6);
            const encryptedValue = await encryptDataGCM(value, keyHex);
            params.set(param, encryptedValue);
            url.search = params;
            history.pushState({}, '', url);
        });
    }

    // Encrypt with AES-128-GCM, returns base64-encoded JSON string
    async function encryptDataGCM(plaintext, keyHex) {
        const key = await crypto.subtle.importKey(
            "raw",
            hexToBytes(keyHex),
            { name: "AES-GCM" },
            false,
            ["encrypt"]
        );

        const iv = crypto.getRandomValues(new Uint8Array(12)); // 12-byte IV for GCM
        const encoder = new TextEncoder();
        const data = encoder.encode(plaintext);

        const encrypted = await crypto.subtle.encrypt({ name: "AES-GCM", iv: iv }, key, data);
        const encryptedBytes = new Uint8Array(encrypted);

        const encryptedJson = {
            iv: bytesToHex(iv),
            data: bytesToHex(encryptedBytes)
        };

        return btoa(JSON.stringify(encryptedJson));
    }

    function hexToBytes(hex) {
        return new Uint8Array(hex.match(/[\da-f]{2}/gi).map(h => parseInt(h, 16)));
    }

    function bytesToHex(bytes) {
        return Array.from(bytes).map(b => b.toString(16).padStart(2, '0')).join('');
    }
})();

// Initialize Bootstrap tooltips
$('[data-bs-toggle="tooltip"]').each(function() {
    new bootstrap.Tooltip(this);
});

// Initialize Bootstrap popovers
$('[data-bs-toggle="popover"]').each(function() {
    new bootstrap.Popover(this);
});

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
    var $pillEl = $("#" + menu.pill + '[data-bs-toggle="pill"]');
    var $collapseEl = $("#" + menu.collapse);
    if ($pillEl.length && $collapseEl.length) {
        $pillEl.on("click", function () {
            $(this).siblings('.nav-link').removeClass('active');
            var getCollapseId = $(this).attr('aria-controls');
            getCollapseId = getCollapseId.substring(getCollapseId.indexOf("pills-") + 6);
            $(this).siblings('div.collapse').not("#submenu-" + getCollapseId).removeClass('show');
            if(!$(this).siblings().find('.text-white').parent().hasClass('active')){
                $(this).siblings().find('.text-white').removeClass('text-white');
            }
            if($(this).parent().siblings().last().find('.active').length > 1) {
                $(this).parent().siblings().last().find('.active').first().removeClass('active show');
            }
            $(this).next().toggleClass('show');
            $(this).addClass('active');
        });
    }
});

// Handle active class for sidebar nav-links
$('.nav-link[data-bs-toggle="collapse"]').on('click', function() {
    $(this).siblings(".nav-link").removeClass('active text-white');
    if (!$(this).parent('#v-pills-tab').length) {
        $(this).siblings().find('.change').removeClass('text-white');
        $(this).children().first().addClass('text-white');
    }
    $(this).siblings("div.collapse").each(function() {
        if($(this).hasClass('show')) {
            $(this).removeClass('show');
        }
    });
    $(this).addClass('active text-white');
});

function encryptData(data) {
    // Replace this with your actual public key
    var publicKey = '-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhnlkXuRmyz2P8eE+8AsBEX5qKo+eDDyGTNKn+LWaQNrv70nQxd/0WpButDz/mwfDi6mWEE7yYz+i62t45Nn08FsLiPbHRe42/vULA5EWdxVlN6+bxhDo7KlPyJoDRUlFi2SMithG/+ZlPnvtUucU72fLvsrcgqJIw0FbYUYrWcUlICRdxOGVR215pZ2uBokCf+3zrT78xZ3ZLBaCjHu/uSzQJmsSwrIVwwVBlpbvtFBLt13JfuCyUcIxN7L/AQeVKUA76X6Vk3cD9j2GOOcNEzmcA4/PL/S40qgncyvyxgLqrFKT7qqXsguA9xhi6xDBLMYNxMlaHGGzKbObkkfDMwIDAQAB\n-----END PUBLIC KEY-----';
    // Encrypt the message using the recipient’s public key
    var encrypt = new JSEncrypt();
    encrypt.setPublicKey(publicKey);
    return encrypt.encrypt(data);
}

(function () {
    // Only run this code if user is on dashboard page
    if (window.location.pathname.includes('/dashboard/sewa')) {
    
    }
})();

// Sidebar hide/show logic
let sidebarHideTimer;

let isShrunk = false;

$("#test123").on('click', function () {
    var parent = $(this).parent();

    if (!isShrunk) {
        // Hide siblings except the icon group
        parent.siblings().not("#iconsAssemble, hr").addClass('d-none');
        parent.siblings("#iconsAssemble").addClass('show');
        parent.parent().parent().removeClass("col-md-3").css('width', '35px');

        // Change image (optional)
        $(this).prev().addClass('d-none');
        $(this).removeClass('ms-2').attr('src', $(this).data('src-right'));

        isShrunk = true;
    } else {
        parent.siblings().not("#iconsAssemble").removeClass('d-none');
        parent.siblings("#iconsAssemble").removeClass('show');
        parent.parent().parent().addClass("col-md-3").css('width', '');

        // Change image back
        $(this).prev().removeClass('d-none');
        $(this).addClass('ms-2').attr('src', $(this).data('src-left'));

        isShrunk = false;
    }
});

// $("#v-pills-tab").on('mouseleave', function(e){
//     var elementOffset = $(this).offset();
//     var elementWidth = $(this).width();
//     var mouseX = e.pageX;
//     var ini = this;
//     if (mouseX <= elementOffset.left) {
//         sidebarHideTimer = setTimeout(function() {
//             $(ini).hide();
//             $(ini).parent().prev().show();
//             // $(ini).parent().prev().css('padding-left', '5px');
//             // $("#v-pills-tabContent").css('margin-left', '35px');
//             // $("#tab").css('margin-left', '35px');
//         }, 1500);
//     } else if (mouseX >= (elementOffset.left + elementWidth)) {
//         sidebarHideTimer = setTimeout(function() {
//             $(ini).hide();
//             $(ini).parent().prev().show();
//             $(ini).parent().prev().css('padding-left', '5px');
//             $("#v-pills-tabContent").css('margin-left', '35px');
//             $("#tab").css('margin-left', '35px');
//         }, 500);
//     }
// }).on('mouseenter', function() {
//     // Reset the timer when mouse enters
//     if (sidebarHideTimer) {
//         clearTimeout(sidebarHideTimer);
//         sidebarHideTimer = null;
//     }
// });

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    const results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

if (window.location.pathname.includes('/dashboard/sewa')) {
    const jsonText = $('#server-data').text();
    const serverData = JSON.parse(jsonText);
    var url = window.location.href;
    if (url.includes("tab=")) {
        // Output the decrypted value as a JS string
        var Tab = serverData.tab;
        var activeTab = "v-pills-" + Tab;
        $(".tab-pane").removeClass("show active");
        $("#" + activeTab).addClass("show active");
    }
}

$("#sidebar-icon1").on('mouseenter click', function(){
    $(this).hide();
    $(this).next().children().first().show();
    $("#v-pills-tabContent").css('margin-left', '');
    if(window.location.pathname.endsWith('/petunjuk/sewa')) {
        let pillTab = $("#v-pills-tab").children(".active").not("#v-pills-petunjuk-tab");
        let sewaTab = $('div[data-bs-target="#petunjuk-submenu"]');
        if(pillTab.hasClass("active")) {
            pillTab.next().removeClass("show");
            pillTab.removeClass("active text-white");
            pillTab.siblings("#v-pills-petunjuk-tab").next().addClass("show");
            pillTab.siblings("#v-pills-petunjuk-tab").addClass("active");
        }
        if(!sewaTab.hasClass("active")) {
            sewaTab.siblings(".active").children().first().removeClass("text-white");
            sewaTab.siblings(".active").next().removeClass("show");
            sewaTab.siblings().removeClass("active");
            sewaTab.children().first().addClass("text-white");
            sewaTab.next().addClass("show");
            sewaTab.addClass("active");
        }
    }
    if (window.location.pathname.includes('/dashboard/sewa')) {
        const jsonText = $('#server-data').text();
        const serverData = JSON.parse(jsonText);
        let pillTab = $("#v-pills-tab").children(".active").not("#v-pills-petunjuk-tab");
        let sewaTab = $('div[data-bs-target="#petunjuk-submenu"]');
        let page = $("#" + serverData.page);
        let opposite = $(serverData.page === "stb" ? "#sstb" : "#stb");
        if(!page.prev().hasClass("active")) {
            opposite.removeClass("show");
            opposite.prev().removeClass("active text-white");
            page.prev().addClass("active");
            page.addClass("show");
        }
        if(!sewaTab.hasClass("active")) {
            sewaTab.siblings(".active").children().first().removeClass("text-white");
            sewaTab.siblings(".active").next().removeClass("show");
            sewaTab.siblings().removeClass("active");
            sewaTab.children().first().addClass("text-white");
            sewaTab.next().addClass("show");
            sewaTab.addClass("active");
        }
        if(pillTab.hasClass("active")) {
            pillTab.next().removeClass("show");
            pillTab.removeClass("active text-white");
            pillTab.siblings("#v-pills-petunjuk-tab").next().addClass("show");
            pillTab.siblings("#v-pills-petunjuk-tab").addClass("active");
        }
    }
});

if(window.location.pathname === '/dashboard') {
    $(".licon").on('click', function(){
        let getDestination = $(this).data("link");
        $(".tab-pane").removeClass('active show');
        $("#" + getDestination).addClass('active show');
        if (!$("button[data-bs-target='#" + getDestination + "']").hasClass('active')) {
            $("button[data-bs-target='#" + getDestination + "']").siblings("button.nav-link").removeClass('active');
            $("button[data-bs-target='#" + getDestination + "']").siblings(".collapse").not("#iconsAssemble").removeClass('show');
            $("button[data-bs-target='#" + getDestination + "']").addClass('active');
            $("button[data-bs-target='#" + getDestination + "']").next().addClass('show');
        }
    });
}