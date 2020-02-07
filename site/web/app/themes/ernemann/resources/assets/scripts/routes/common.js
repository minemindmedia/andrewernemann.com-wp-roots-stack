import videojs from 'video.js';
export default {
  init() {
    // JavaScript to be fired on all pages
      var openmodal = document.querySelectorAll('.modal-open')
      for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event){
        event.preventDefault()
        toggleModal()
        })
      }
      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', toggleModal)
      
      var closemodal = document.querySelectorAll('.modal-close')
        for (var ii = 0; ii < closemodal.length; ii++) {
          closemodal[ii].addEventListener('click', toggleModal)
        }
      
      document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ('key' in evt) {
        isEscape = (evt.key === 'Escape' || evt.key === 'Esc')
        } else {
        isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
        }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    var video = videojs('video-player');
    video.on('pause', function() {
      this.bigPlayButton.show();
      
      video.one('play', function() {
        this.bigPlayButton.hide();
      });
    });
    var videoxxx = videojs('video-playerxxx');
    video.on('pause', function() {
      this.bigPlayButton.show();
      
      videoxxx.one('play', function() {
        this.bigPlayButton.hide();
      });
    });
  },
};
