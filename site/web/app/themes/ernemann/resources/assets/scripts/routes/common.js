import jQueryPopupOverlay from 'jquery-popup-overlay';
import lozad from 'lozad';
export default {
  init() {
    // JavaScript to be fired on all pages
    $(window).on('scroll', function() {
      if($(window).scrollTop() > 50) {
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
    $('#phoneTooltip').popup({
      type: 'tooltip',
      offsettop: 0,
      offsetleft: -125,
    });
    return jQueryPopupOverlay;
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
