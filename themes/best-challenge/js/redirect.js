/**
 * redirect.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */





     function redirect(){

$('.toggle-visible-hidden').remove("toggle-visible-hidden");
window.setTimeout(function () {
        location.href = "https://www.google.com";
    }, 5000);
                 
                        //wait five seconds function...//
    }