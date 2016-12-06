(function ($) {

  //function to show prize description on click 

  $('.single-prize').on('click', function (event) {
    event.preventDefault();
    $(this).find('.prize-description').css('display', 'initial');
  });
  $('.prize-description').mouseleave(function () {
    $(this).css('display', 'none');
  });

  //function to show prize category description on click 
  // $('.category-name').on('click',function(event){
  //      event.preventDefault();
  //      $('.category-description').css('height', '300px');
  //  });
  //   $('.category-description').mouseleave(function(){
  //     $(this).css('height' , '0px');
  //  });


  $('.prize-categories').on('click', '.category-name', function () {
    $(this).siblings().children().slideToggle('fast');
    $(this).siblings().children().next().toggle('fast');
  });
  //

// Typewriter Effect 

document.addEventListener('DOMContentLoaded',function(event){
  // array with texts to type in typewriter
  var dataText = [ "Car Share.", "Bicycle.", "Bus.", "Roller-blades.", "Train.", "Foot."];
  
  // type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to class typrewirte
     document.getElementById("typewrite").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
        typeWriter(text, i + 1, fnCallback)
      }, 100);
    }
    // text finished, call callback if there is a callback function
    else if (typeof fnCallback == 'function') {
      // call callback after timeout
      setTimeout(fnCallback, 1500);
    }
  }
  // start a typewriter animation for a text in the dataText array
   function StartTextAnimation(i) {
     if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
          StartTextAnimation(0);
        }, 10000);
     }
     // check if dataText[i] exists
    if (i < dataText[i].length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       StartTextAnimation(i + 1);
     });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});

//Typewriter end

//// Mobile Menu

$('.menu-toggle').on('click', function(){
   event.preventDefault();
   $('#primary-menu').animate({width:'toggle'});
  });

  $('.menu-toggle').on('focusout', function(){
    event.preventDefault();
    //$('#primary-menu').slideToggle(350);
   });



/// Mobile menu end


})(jQuery);

