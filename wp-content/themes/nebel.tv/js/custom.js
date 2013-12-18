/**
 * Created by howtwizer on 09.12.13.
 */

( function( $ ) {



    /* Side menu */
    $(document).ready(function() {
        $("[data-toggle]").click(function(e) {
            var toggle_el = $(this).data("toggle");
            $(toggle_el).toggleClass("open-sidebar");
            e.preventDefault();
            return false;
        });
    });
    /* EOF Side menu */
    
    $('.content-scroll').mCustomScrollbar({
        autoHideScrollbar: Boolean,
        scrollInertia: 0,
        mouseWheelPixels: 100,
        advanced: {
            autoScrollOnFocus: false
        }
    });

    var win_h = $(window).height();
    var sh_h = $('.site-header').height();
    var sb_h = $('.blog-sidebar').height();
    /*  if(0 != sb_h) {
     $('.content-scroll').height(sb_h - 100);
     } */
    //$('.content-scroll').height(win_h - sh_h - (0.14 * win_h ));





} )( jQuery );