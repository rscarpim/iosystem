console.log('read');

// Sidenav
$(".sidenav-trigger").on("click", function () {
    if ($(window).width() < 960) {
        $(".sidenav").sidenav("close");
        $(".app-sidebar").sidenav("close");
    }
});



$(window).on("resize", function () {
    resizetable();
    // Draw table with height
    // table.scrollY = calcDataTableHeight();
    // table.draw();

    if ($(window).width() > 899) {
        $("#contact-sidenav").removeClass("sidenav");
    }

    if ($(window).width() < 900) {
        $("#contact-sidenav").addClass("sidenav");
    }
});

function resizetable() {
    $(".app-page .dataTables_scrollBody").css({
        // maxHeight: ($(window).height() - 400) + 'px'
        maxHeight: $(window).height() - 420 + "px"
    });
}
resizetable();

// For contact sidebar on small screen
if ($(window).width() < 900) {
    $(".sidebar-left.sidebar-fixed").removeClass("animate fadeUp animation-fast");
    $(".sidebar-left.sidebar-fixed .sidebar").removeClass("animate fadeUp");
}