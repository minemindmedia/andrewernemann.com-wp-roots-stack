/* eslint-disable */
import jQueryPopupOverlay from 'jquery-popup-overlay';
import Siema from 'siema';
export default {
  init() {
    // JavaScript to be fired on the about us page

    const mySiema = new Siema({
        selector: '.sp-gallery',
        duration: 200,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: false,
        rtl: false,
        onInit: () => {},
        onChange: () => {},
    });
    document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
    document.querySelector('.next').addEventListener('click', () => mySiema.next());


    $('.buyModal').popup({
        transition: '0.2s',
        scrolllock: true,
    });
    $('#directionsModal').popup({
        transition: '0.2s',
        scrolllock: true,
      });
    return jQueryPopupOverlay;
    
    

  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    (function($) {
        function new_map( $el ) {
            var $markers = $el.find('.marker');
            var args = {
                zoom		: 16,
                center		: new google.maps.LatLng(0, 0),
                mapTypeId	: google.maps.MapTypeId.ROADMAP,
            };        	
            var map = new google.maps.Map( $el[0], args);
            map.markers = [];
            $markers.each(function(){
                add_marker( $(this), map );
            });
            center_map( map );
            return map;
        }
        function add_marker( $marker, map ) {
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
            var marker = new google.maps.Marker({
                position	: latlng,
                map			: map,
            });
            map.markers.push( marker );
            if( $marker.html() )
            {
                var infowindow = new google.maps.InfoWindow({
                    content		: $marker.html(),
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open( map, marker );
                });
            }
        }       
        function center_map( map ) {
            var bounds = new google.maps.LatLngBounds();
            $.each( map.markers, function( i, marker ){
                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
                bounds.extend( latlng );
            });
            if( map.markers.length == 1 )
            {
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            }
            else
            {
                map.fitBounds( bounds );
            }
        
        }
        var map = null;
        $(document).ready(function(){
            $('.acf-map').each(function(){
                map = new_map( $(this) );
            });
        });
        return map;
      })(jQuery);
  },
};
