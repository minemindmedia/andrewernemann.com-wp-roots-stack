import videojs from 'video.js';
export default {
  init() {
    // JavaScript to be fired on all pages
      
    
    
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
  },
};
