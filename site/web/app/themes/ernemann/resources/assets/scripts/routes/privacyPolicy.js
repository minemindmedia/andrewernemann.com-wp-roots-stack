export default {
  init() {
    // JavaScript to be fired on all pages
    $(window).on('scroll', function() {
      if($(window).scrollTop() > 160) {
          $('.siteheader_pp').addClass('active');
      } else {
          //remove the background property so it comes transparent again (defined in your css)
         $('.siteheader_pp').removeClass('active');
      }
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
