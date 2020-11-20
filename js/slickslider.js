// SLick sliderin koodi
$(document).ready(function(){
  $('.your-class').slick({
      slidesToScroll: 1,
      slidesToShow: 1,
      infinite: true,
  });
  $('.slider-nav').slick({
      slidesToScroll: 3,
      slidesToShow: 3,
      asNavFor: '.your-class',
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      dots: true
    });
});



$(document).ready(function(){
    $('.hakemuksienlistaus').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        infinite: false,
        rows: 10,
        arrows: true,
        dots: true,
        dotsClass: 'slidernumbers',
    });
  });
                        



