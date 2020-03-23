import jQueryPopupOverlay from 'jquery-popup-overlay';
import lozad from 'lozad';
export default {
  init() {
    // JavaScript to be fired on all pages
    var $win = $(window);
    var winH = $win.height();
    $(window).on('scroll', function() {
      if($(window).scrollTop() > winH) {
          $('.siteheader').addClass('active');
      } else {
          //remove the background property so it comes transparent again (defined in your css)
         $('.siteheader').removeClass('active');
      }
    });
    const observer = lozad();
    observer.observe();
    $('#navModal').popup({
        transition: '0.2s',
        scrolllock: true,
    });
    $('#contactModal').popup({
      transition: '0.2s',
      scrolllock: true,
    });
    $('#marketModal').popup({
      transition: '0.2s',
      scrolllock: true,
    });
    $('#phoneTooltip').popup({
      type: 'tooltip',
      offsettop: 0,
      offsetleft: -150,
    });

    $(document).ready(function() {
      $('#showHidePhone').click(function() {
        $('#phone').stop(false).toggle('slow');
      });
    });
    
    return jQueryPopupOverlay;

    

    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
