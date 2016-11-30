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
  })( jQuery );