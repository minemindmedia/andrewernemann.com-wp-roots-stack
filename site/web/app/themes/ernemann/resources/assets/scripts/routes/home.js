import jQueryPopupOverlay from 'jquery-popup-overlay';
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
    $('.flexslider').slick({
      dots: true,
      speed: 500,
      adaptiveHeight: true,
      arrows: false,
    });

    var _video = document.querySelector('video');
      function isScrolledIntoView( element ) {
          var elementTop    = element.getBoundingClientRect().top,
              elementBottom = element.getBoundingClientRect().bottom;

          return elementTop >= 0 && elementBottom <= window.innerHeight;
      }
      window.addEventListener('scroll', function(){
        if (isScrolledIntoView(_video)) {
          _video.play();
        }
        else {
          _video.pause()
        }
      })

    return jQueryPopupOverlay;
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
