<!DOCTYPE html>
<html >
  <head>
    <title></title>
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>

<script type="text/javascript">
var map;
  function initMap(){
    map = new google.maps.Map(document.getElementById('map'),{
      center:{lat:19.4198147, lng:19.4198147},
      zoom:9
    });
  }
</script>
<script async defer
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7NWXEzJ-RRutuDhaKuFTbVB9pnixS-j8&callback=initMap"></script>
  </body>
</html>