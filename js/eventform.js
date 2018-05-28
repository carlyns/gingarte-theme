// ALL FUNCTIONS LUMPED TOGETHER
var main = function() {


  // TOGGLING the thanks for payment message.
  $(".paidbutton").click(function() {
    $(".paidmsg").toggle(500);
    $(".paidbutton").toggle(500);
    $("form").toggle(500);
  });

  // TOGGLING the expand payment.
  $(".paidmsg a").click(function() {
    $("form").toggle(500);
    $(".paidmsg").toggle(500);
    $(".paidbutton").toggle(500);

  });

  // SMOOTH SCROLLING TO ANCHORS ON PAGE
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



}
$(document).ready(main);
