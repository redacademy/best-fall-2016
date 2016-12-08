/**
 * redirect.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */

(function ($) {
    $('#sign-up').on("click", function (event) {
        event.preventDefault();
        $( "div" ).first().remove();
        $( "footer" ).remove();
        $('.content-area').remove()
    $('.toggle-visible-hidden').css("visibility", "visible");
    $('.toggle-visible-hidden').css("height", "100vh");
    

    window.setTimeout(function () {
        location.href = "https://commuterchallenge.ca/";
    }, 5000)
    });
    
})(jQuery);

