/**
 * scripts.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */


(function ($) {
  //function to show prize description on click 

  $('.single-prize').on('click', function (event) {
    event.preventDefault();
    $(this).find('.prize-description').css('display', 'initial');
  });
  $('.prize-description').mouseleave(function () {
    $(this).css('display', 'none');
  });


// Prize categories drop down list 

  $('.prize-categories').on('click', '.category-name', function () {
    $(this).siblings().children().slideToggle('fast');
    $(this).siblings().children().next().toggle('fast');
  });


  //function to show prize description on click 

  $('.single-prize').on('click', function (event) {
    event.preventDefault();
    $(this).find('.prize-description').css('display', 'initial');
  });
  $('.prize-description').mouseleave(function () {
    $(this).css('display', 'none');
  });


//// Mobile Menu

$('.menu-toggle').on('click', function(){
   event.preventDefault();
   $('#primary-menu').animate({height:'toggle'});
   $('#primary-menu').css("display", "flex");
  //  $("#primary-menu").toggleClass('hidden');
  });

  $('.menu-toggle').on('blur', function(){
    event.preventDefault();
   });
/// Mobile menu end


//change bc map on click on Participants page 
 $('#van-map').hide();
 $('#vancouver').on('mouseover', function (event) {
    event.preventDefault();
    $('#bc-map').hide();
    $('#van-map').show();
 });

  $('#vancouver').mouseleave(function () {
    event.preventDefault();
    $('#bc-map').hide();
    $('#van-map').show();
 });

  $('#bc').on('mouseover', function (event) {
    $('#van-map').hide();
    $('#bc-map').show();
  });

})(jQuery);

