import AOS from 'aos';
export default {
  init() {
    // JavaScript to be fired on the about us page
    AOS.init();

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

      var selectedTab = 0,
      scrollDelay = 20,
      scrollSpeed = 400,
      scrolltopOffset = 100; 

      $('#tabs').children().each(function (i) {
      i = i + 1;
      $(this).attr('id', 'tab-' + i).addClass('tab').wrapInner(
          '<div class="tab-wrapper"></div>').append(
            '<div class="icon"></div>');
      });
      var count = $('#tabs').children().length;
      var tab_width = (100 / count) + '%';
      $('#tabs li').css('width', tab_width).eq(0).addClass('first').end().eq(-1).addClass(
      'last').end();
      $('#panels').children().each(function (i) {
      i = i + 1;
      $(this).attr('id', 'panel-' + i).addClass('panel').wrapInner(
          '<div class="panel-wrapper"></div>').prepend(
          '<div class="accordion-tab"></div>');
      });
      $('.accordion-tab').each(function (i) {
      i = i + 1;
      var tab_name = $('#tab-' + i).html();
      $(this).html(tab_name);
      });
      $('#tabs').children().eq(selectedTab).addClass('xactive');
      $('#panels').children().eq(selectedTab).addClass('xactive');
      $('#tabs > li').click(function () {
      $('#tabs > li, #panels > li').removeClass('xactive');
      $('#panels > li').eq($(this).index()).toggleClass('xactive');
      $(this).toggleClass('xactive');
      });
      $('.accordion-tab').click(function () {
      $('#tabs > li, #panels > li').removeClass('xactive');
      $('#tabs > li').eq($(this).parent().index()).toggleClass('xactive');
      $(this).parent().toggleClass('xactive');
      });
      $('.tab, .accordion-tab').click(function () {
      $('html,body').delay(scrollDelay).animate({
          scrollTop: $(this).offset().top - scrolltopOffset,
      }, scrollSpeed);
      });
      $('body,html').bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup',

      function (e) {
      if (e.which > 0 || e.type == 'mousedown' || e.type == 'mousewheel') {
          $('html,body').stop();
      }
      })
	


    
  },
};
