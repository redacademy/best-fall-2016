(function( $ ) {
  //shows the search input field on click
     
  $('.question').hover(function(event){
    event.preventDefault();

    
    $('.answer').css('display', 'initial');
  });
  //hides the search input field when not in focus
  $('.question').on('mouseleave', function(){
    $('.answer').css('display', 'none');
  });
  })( jQuery );