import Tabit from 'Tabit'
export default {
  init() {
    // JavaScript to be fired on the about us page

    function debounce(func, wait, immediate) {
      var timeout;
      return function() {
      var context = this, args = arguments;
      var later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
      };
  }
         
  var videoEl = document.getElementById('vid'),
                videoContainer = $('video');


  $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();

      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();

      return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on('resize scroll', debounce(function() {
      if (videoContainer.isInViewport()) {
          videoEl.play();
          console.log('play');
      } else {
          videoEl.pause();
          console.log('paused')
      }   
  }, 250))

  
    const element = document.getElementById('tabs');
    const options = {
      buttonActiveClass: 'is-active',
    };
    const tabit = new Tabit(element, options); 
    return tabit;

    
  },
};
