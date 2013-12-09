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




} )( jQuery );