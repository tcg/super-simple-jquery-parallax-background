jQuery( document ).ready( function( $ ) {
    // Set the background-attachment for body to "fixed" so that
    // we can control it's scroll speed. You may have set this already
    // via the theme's 'customize' screen in WordPress. Just in case
    // it wasn't set correctly, we override it right here:
    $('body').css('background-attachment', 'fixed');

    // Attach a function to watch the window.scroll event, and
    // move the background image slower than the content scroll.
    $(window).scroll(function () {
        document.body.style.backgroundPosition = "0px " + (0 - (Math.max(document.documentElement.scrollTop, document.body.scrollTop) / 4)) + "px";
    });
});
