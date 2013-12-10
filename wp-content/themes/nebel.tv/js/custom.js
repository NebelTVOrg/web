/**
 * Created by howtwizer on 09.12.13.
 */

( function( $ ) {

    $( document ).on( "click", ".home #menu-top-menu a,.home #menu-side-menu-buttons a", function( e ) {
        e.preventDefault();
        return false;
    } );

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

    var win_h = $(window).height();
    var sh_h = $('.site-header').height();
    var sb_h = $('.blog-sidebar').height();
    /*  if(0 != sb_h) {
     $('.content-scroll').height(sb_h - 100);
     } */
    $('.content-scroll').height(win_h - sh_h - (0.14 * win_h ));


} )( jQuery );