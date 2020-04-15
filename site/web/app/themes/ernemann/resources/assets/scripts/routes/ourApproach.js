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


      tabControl();

      var resizeTimer;
      $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
          tabControl();
        }, 250);
      });
      
      function tabControl() {
        var tabs = $('.tabbed-content').find('.tabs');
        if(tabs.is(':visible')) {
          tabs.find('a').on('click', function(event) {
            event.preventDefault();
            var target = $(this).attr('href'),
                tabs = $(this).parents('.tabs'),
                buttons = tabs.find('a'),
                item = tabs.parents('.tabbed-content').find('.item');
            buttons.removeClass('active');
            item.removeClass('active');
            $(this).addClass('active');
            $(target).addClass('active');
          });
        } else {
          $('.item').on('click', function() {
            var container = $(this).parents('.tabbed-content'),
                currId = $(this).attr('id'),
                items = container.find('.item');
            container.find('.tabs a').removeClass('active');
            items.removeClass('active');
            $(this).addClass('active');
            container.find('.tabs a[href$="#'+ currId +'"]').addClass('active');
          });
        } 
      }


    
  },
};
