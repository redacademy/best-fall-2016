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
})(jQuery);

// Typewriter Effect 

  var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.1em solid #666 }";
  document.body.appendChild(css);
};


//Typewriter end
