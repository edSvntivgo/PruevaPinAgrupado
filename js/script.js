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
          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
            var image='img/pin.png';
              var markers=locations.map(function(location,i){
              return new google.maps.Marker({
                position:location,
                icon:image,
                draggadle: true,
                animation: google.maps.Animation.DROP,
              });
            });

            var markerCluster = new MarkerClusterer(map, markers,{imagePath:'http://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

          });
          map.fitBounds(bounds);
        });
}
function lee(){

}

var locations =[
  {lat:19.4324945, lng:-99.0169327},
  {lat:19.4122119, lng:-98.9913004},
  {lat:19.3176524, lng:-98.9366256},
  {lat:19.265037,  lng:-98.9171222},
  {lat:19.39068,   lng:-99.2836987},
  {lat:19.3843038, lng:-99.0151469},
  {lat:19.4011312, lng:-99.0647137},
  {lat:19.4076076, lng:-99.1344082},
  {lat:19.3860725, lng:-99.1371548},
  {lat:19.3946545, lng:-99.18419},
  {lat:25.6485276, lng:-100.5833138},
  {lat:25.6675599, lng:-100.3185261},
  {lat:20.8388605, lng:-100.9415503},
  {lat:20.532023,  lng:-100.5010414},
  {lat:20.507586,  lng:-100.6919289},
  {lat:17.9473795, lng:-93.6800389},
  {lat:17.9153138, lng:-92.7500665},
  {lat:17.555992,  lng:-93.5551983},
  {lat:20.6531137, lng:-103.3488219},
  {lat:20.6531137, lng:-103.3488219},
  {lat:19.3919956, lng:-99.1607461},
  {lat:19.3908419, lng:-99.1602741},
  {lat:19.3783276, lng:-99.142399},
  {lat:28.3498733, lng:-113.6514648},
  {lat:27.965491,  lng:-114.0076029},
  {lat:21.85796750,lng:-102.28485913},
  {lat:28.0286833, lng:-114.0175511},
  {lat:32.7106278, lng:-117.1620293},
  {lat:32.7101765, lng:-117.1500774},
  {lat:32.7307708, lng:-117.1492881},
  {lat:32.6740859, lng:-117.110308},
  {lat:32.6689237, lng:-117.0733393},
  {lat:32.6771817, lng:-117.068767},
  {lat:32.5607356, lng:-117.1073242},
  {lat:32.5371949, lng:-116.9731775},
  {lat:32.5708073, lng:-116.9758214},
  {lat:31.4619623, lng:-110.3627962},
  {lat:31.2585776, lng:-110.2540487},
  {lat:34.1458207, lng:-108.2695394},
  {lat:28.6263427, lng:-106.080568},
  {lat:28.6212699, lng:-106.0256431},
  {lat:28.6005337, lng:-106.0291397},
  {lat:28.5901316, lng:-106.018052},
  {lat:25.0891587, lng:-107.695633},
  {lat:25.0685544, lng:-107.6745626},
  {lat:23.7964686, lng:-102.9760725},
  {lat:23.3748412, lng:-102.4779763},
  {lat:34.0201812, lng:-118.6919188},
  {lat:34.0825439, lng:-118.4345534},
  {lat:34.0804113, lng:-118.4264853},
  {lat:34.0754349, lng:-118.3756735},
  {lat:34.0845607, lng:-118.4271938},
  {lat:34.0729532, lng:-118.4148571},
  {lat:34.1458207, lng:-108.2695394},
  {lat:19.4168924, lng:-99.1573705},
  {lat:19.4148388, lng:-99.1435026},
  {lat:19.402534,  lng:-99.1232465},
  {lat:19.3783198, lng:-99.0698897},
  {lat:19.3772685, lng:-99.0625197},
  {lat:19.3944913, lng:-99.0089816},
  {lat:19.3998058, lng:-99.141964}
]
