$(document).ready(function(){
    $('.slickcards').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
});

$('div.photo').click(function() {
  $('img.photo-wrapback').toggleClass("move-wrapback");
  $('img.photo-wrapfront').toggleClass("move-wrapfront");
});
