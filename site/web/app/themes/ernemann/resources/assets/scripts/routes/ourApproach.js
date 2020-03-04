import Tabit from 'Tabit'
export default {
  init() {
    // JavaScript to be fired on the about us page

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


    const element = document.getElementById('tabs');
    const options = {
      buttonActiveClass: 'is-active',
    };
    const tabit = new Tabit(element, options); 
    return tabit;

    
  },
};
