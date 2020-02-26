import jQueryPopupOverlay from 'jquery-popup-overlay';
import videojs from 'video.js';
export default {
  init() {
    // JavaScript to be fired on the home page
    $('.mrModal').popup({
      transition: '0.2s',
      scrolllock: true,
    });
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
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    });
    $('.flexslider').slick({
      dots: true,
      speed: 500,
      adaptiveHeight: true,
      arrows: false,
    });

    var video = videojs('home-player');
    
      video.on('pause', function() {
        this.bigPlayButton.show();
      
        video.one('play', function() {
          this.bigPlayButton.hide();
      });
    });
    return jQueryPopupOverlay;
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
