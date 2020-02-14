import jQueryPopupOverlay from 'jquery-popup-overlay'
export default {
  init() {
    // JavaScript to be fired on the about us page
    $('.teamModal').popup({
        transition: '0.2s',
        scrolllock: true,
    });
    return jQueryPopupOverlay;
  },
};
