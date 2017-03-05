
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
function initMap (){
  var ubicacion={lat:19.4319526, lng:-99.1418086};
  var map=new google.maps.Map(document.getElementById('map'),{
    zoom:5,
    center:ubicacion
  });
  var labels='abcdefghijklmnopqrstuvwxyz';
  var image='img/pin.png';
  var markers=locations.map(function(location,i){
    return new google.maps.Marker({
      position:location,
      label: labels[i%labels.length],
      icon:image
    });
  });

  var markerCluster = new MarkerClusterer(map, markers,{imagePath:'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}

var locations =[
  {lat:19.4324945, lng:-99.0169327},
  {lat:19.4122119, lng:-98.9913004},
  {lat:19.3176524, lng:-98.9366256},
  {lat:19.265037, lng:-98.9171222},
  {lat:19.39068, lng:-99.2836987},
  {lat:19.3843038, lng:-99.0151469},
  {lat:19.4011312, lng:-99.0647137},
  {lat:19.4076076, lng:-99.1344082},
  {lat:19.3860725, lng:-99.1371548},
  {lat:19.3946545, lng:-99.18419},
  {lat:25.6485276, lng:-100.5833138},
  {lat:25.6675599, lng:-100.3185261},
  {lat:20.8388605, lng:-100.9415503},
  {lat:20.532023, lng:-100.5010414},
  {lat:20.507586, lng:-100.6919289}
]
</script>
<script src="js/markerclusterer.js"></script>
<script async defer
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7NWXEzJ-RRutuDhaKuFTbVB9pnixS-j8&callback=initMap"></script>
  </body>
</html>