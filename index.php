
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      html, body {
        height: 90%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

    </style>
    <title>Busqueda de Pines por seccion</title>
    <style>
      #target {
        width: 345px;
      }
    </style>
  </head>
  <body>
    <input id="pac-input" class="controls form-control" type="text" placeholder="Busqueda de Anuncios">
    <div id="map"></div>
  <div class="row">
    <div >
      <table class="table">
        <thead>
          <tr>
            <td>latitud</td>
            <td>longitud</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
            include('conexion.php');
            
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<!--<script src="js/script.js"></script>-->
<script src="js/markerclusterer.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7NWXEzJ-RRutuDhaKuFTbVB9pnixS-j8&libraries=places&callback=initAutocomplete" async defer></script>
<script src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

<script type="text/javascript">
  function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 24.9633627, lng: -105.4944195},
    zoom: 5,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
        // obtiene los datos del inpput para la busqueda
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        //obtiene los datos del input y empiesa a usar google place para el auto completado
        searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

          if (places.length == 0) {
            return
          }
          
          var bounds = new google.maps.LatLngBounds();
        
          places.forEach(function(place) {
            if (place.geometry.viewport) {
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);

            }
            var image='img/pin.png';
              var markers=locations.map(function(location,i){
              return new google.maps.Marker({
                position:location,
                icon:image,
                animation: google.maps.Animation.DROP,
              });
            });
            var markerCluster = new MarkerClusterer(map, markers,{imagePath:'http://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
            var zona = new google.maps.Polygon({
                  paths:locations,
                  strokeColor: '#FFC300',
                  strokeOpacity: 0.5,
                  strokeWeight: 2,
                  fillColor: '#FFC300',
                  fillOpacity: 0.1
                });
                zona.setMap(map);
          });
          map.fitBounds(bounds);
        });
}


var locations=[
            
            while ($row=mysqli_fetch_assoc($res)){?>
            {lat:<?php $row['latitud']?>,lng:<?php ['longitud']?>},
    <?php } ?>
]
</script>
  </body>
</html>