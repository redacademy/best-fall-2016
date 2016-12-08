
/**
 * green-button-redirect.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */



(function ($) {
    $('#go-green-button').on("click", function (event) {
        event.preventDefault();

window.location="http://best.academy.red/get-involved/";


    });
})(jQuery);