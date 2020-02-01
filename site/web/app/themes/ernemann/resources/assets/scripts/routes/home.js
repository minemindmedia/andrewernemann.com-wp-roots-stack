export default {
  init() {
    // JavaScript to be fired on the home page
    $('.testimonial-slider').slick({
      dots: true,
      speed: 500,
      adaptiveHeight: true,
      arrows: false,
    });
    $('.press-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
