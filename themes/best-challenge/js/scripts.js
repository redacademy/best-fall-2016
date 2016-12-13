/**
 * scripts.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */


(function ($) {
  //function to show prize description on click 

  $('#prize-posts').on('click', function (event) {
    event.preventDefault();
    $(this).find('#prize-description').css('display', 'initial');
  });
  $('#prize-description').mouseleave(function () {
    $(this).css('display', 'none');
  });


  // Prize categories drop down list 

  $('.prize-categories').on('click', '.category-name', function () {
    $(this).siblings().children().slideToggle('fast');
    $(this).siblings().children().next().toggle('fast');
  });


  //// Mobile Menu

  $('.menu-toggle').on('click', function () {
    event.preventDefault();
    $('#primary-menu').animate({ height: 'toggle' });
    // $('#primary-menu').css("display", "flex");
    //  $("#primary-menu").toggleClass('hidden');
  });

  $('.menu-toggle').on('blur', function () {
    event.preventDefault();
  });
  /// Mobile menu end

  var stickyOffset = $('.stickyBar').offset().top;

  // our function that decides weather the navigation bar should have "fixed" css position or not.
  var stickyBar = function () {
    var scroll_top = $(window).scrollTop(); // our current vertical position from the top

    // if we've scrolled more than the bar, change its position to fixed to stick to top,
    // otherwise change it back to relative
    if (scroll_top > stickyOffset) {
      $('.stickyBar').addClass('stickyIsFixed');
    } else {
      $('.stickyBar').removeClass('stickyIsFixed');
    }
  };

  // run our function on load
  stickyBar();

  // and run it again every time you scroll
  $(window).scroll(function () {
    stickyBar();
  });

  //change bc map on click on Participants page 
  $('#van-map').hide();
  $('#bc-map').hide();
  $('#vancouver').on('mouseover', function (event) {
    event.preventDefault();
    $('#default-map').hide();
    $('#van-map').show();
  });

  $('#vancouver').mouseleave(function (event) {
    event.preventDefault();
    $('#bc-map').hide();
    $('#van-map').hide();
    $('#default-map').show();
  });

  $('#bc').on('mouseover', function () {
    $('#default-map').hide();
    $('#van-map').hide();
    $('#bc-map').show();
  });


  //change to Canada results on click
  $('.canada-results-info').hide();
  $('.canadabutton').on('click', function(event){
    event.preventDefault();
    $('.bc-results-info').hide();
    $('.canada-results-info').show();
  });

  $('.bcbutton').on('click', function(event){
    event.preventDefault();
    $('.canada-results-info').hide();
    $('.bc-results-info').show();
  });



})(jQuery);