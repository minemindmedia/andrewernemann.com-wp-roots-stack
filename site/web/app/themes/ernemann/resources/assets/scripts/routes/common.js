import jQueryPopupOverlay from 'jquery-popup-overlay';
import lozad from 'lozad';
export default {
  init() {
    // JavaScript to be fired on all pages
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
    return jQueryPopupOverlay;
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
