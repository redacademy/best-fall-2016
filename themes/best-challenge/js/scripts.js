(function( $ ) {
  //shows the answer on click 
     
  $('.question').hover(function(event){
    event.preventDefault();
    $('.answer').css('display', 'initial');
  });

  //hides the answer on click 
  $('.question').on('mouseleave', function(){
    $('.answer').css('display', 'none');
  });
 
 //function to show prize description on click 

 $('.single-prize').on('click',function(event){
     event.preventDefault();
     $(this).find('.prize-description').css('display', 'initial');
 });
  $('.prize-description').mouseleave (function(){
    $(this).css('display', 'none');
 });


  })( jQuery );