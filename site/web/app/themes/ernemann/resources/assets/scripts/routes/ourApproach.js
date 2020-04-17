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

    $('.tab_content').hide();
    $('.tab_content:first').show();

    /* if in tab mode */
    $('ul.tabs li').click(function() {
    
      $('.tab_content').hide();
      var activeTab = $(this).attr('rel'); 
      $('#'+activeTab).fadeIn();		
    
      $('ul.tabs li').removeClass('active');
      $(this).addClass('active');

    $('.tab_drawer_heading').removeClass('d_active');
    $('.tab_drawer_heading[rel^="'+activeTab+'"]').addClass('d_active');
    
    });
    /* if in drawer mode */
    $('.tab_drawer_heading').click(function() {
        
        $('.tab_content').hide();
        var d_activeTab = $(this).attr('rel'); 
        $('#'+d_activeTab).fadeIn();
      
      $('.tab_drawer_heading').removeClass('d_active');
        $(this).addClass('d_active');
      
      $('ul.tabs li').removeClass('active');
      $('ul.tabs li[rel^="'+d_activeTab+'"]').addClass('active');
      });
    
    
    /* Extra class 'tab_last' 
      to add border to right side
      of last tab */
    $('ul.tabs li').last().addClass('tab_last');
	


    
  },
};
