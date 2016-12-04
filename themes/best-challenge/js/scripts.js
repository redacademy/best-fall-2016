(function( $ ) {
 
 //function to show prize description on click 

 $('.single-prize').on('click',function(event){
     event.preventDefault();
     $(this).find('.prize-description').css('display', 'initial');
 });
  $('.prize-description').mouseleave (function(){
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


  $('.prize-categories').on('click', '.category-name', function() {
     $(this).siblings().children().slideToggle('fast');
     $(this).siblings().children().next().toggle('fast');
   });
//
  })( jQuery );