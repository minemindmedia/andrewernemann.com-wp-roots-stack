import jQueryPopupOverlay from 'jquery-popup-overlay'
export default {
  init() {
    // JavaScript to be fired on all pages
    $('#navModal').popup({
        transition: '0.5s',
        scrolllock: true,
    });
    return jQueryPopupOverlay;
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
