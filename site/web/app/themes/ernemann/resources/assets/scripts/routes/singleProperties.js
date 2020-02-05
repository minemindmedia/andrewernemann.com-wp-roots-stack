export default {
  init() {
    // JavaScript to be fired on the about us page
    $('.single-gallery').slick({
      arrows: true,
      dots: true,
      useCSS: false,
    });
    $('.single-gallery_two').slick({
      arrows: false,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 4000,
    });
  },
};
