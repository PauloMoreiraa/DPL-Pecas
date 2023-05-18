$(document).ready(function(){
    $('.slider-inicio').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        centerMode: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        cssEase: 'linear',
        prevArrow: false,
        nextArrow: false
    });
  });

  $('.slider-marcas').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: false,
    nextArrow: false,
    centerMode: true,

    breakpoint: 768,
      settings: {
        slidesToShow: 2, 
        slidesToScroll: 1 
      }
  });