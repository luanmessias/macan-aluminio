<div class="googleMap">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script>
    // This example adds a marker to indicate the position
    // of Bondi Beach in Sydney, Australia
    function initialize() {
      var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(-23.527609,-46.5758492,17)
      }
      var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

      var image = 'img/mapIcon.png';
      var myLatLng = new google.maps.LatLng(-23.527609,-46.5758492,17);
      var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <div class="mapContent" id="map-canvas"></div>
</div>