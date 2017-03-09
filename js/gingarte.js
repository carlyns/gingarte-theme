// ALL FUNCTIONS LUMPED TOGETHER var main = function() {}   ... not really necessary bc of the bottom function. 


  // TOGGLING THE BRAZIL SECTION
  $(".toggle-brazil").click(function() {
    $(".brazil").toggle();
  });
  // TOGGLING THE GROUP SECTION
  $(".toggle-group").click(function() {
    $(".group").toggle();
  });
  // TOGGLING THE CHICAGO SECTION
  $(".toggle-chicago").click(function() {
    $(".chicago").toggle();
  });

  // FIXED MENU BAR FROM PIRATA!
    //get the position of the header
  var headerTopOffset = $(".menu-bar").offset().top;
  var menubarheight = $(".menu-bar").outerHeight(true); // from fewd
  var picTopOffset = $(".frontimg").offset().top;
  $(window).scroll(function () {
      //if the position of the page is greater than where the header starts
      if ($(window).scrollTop() >= (picTopOffset - menubarheight)) {
          //make it sticky
          $(".mobilemenu").addClass("mobilemenu-fixed");
      } else {
          //no more sticky
          $(".mobilemenu").removeClass("mobilemenu-fixed");
      }
  });

  // headerTopOffset is 94 even on small screen.  should be two states. 

  // TOGGLING THE MOBILE MENU
  $(".menu-icon").click(function() {
    $(".dropdown").toggle();
  });

  // SMOOTH SCROLLING TO ANCHORS ON PAGE
  // works in Chrome and Firefox but not in Safari (but only this function.  the others are fine.  )
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });



$(document).ready(main);
