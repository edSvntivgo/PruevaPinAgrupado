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
    /* coloca un marcador
    var miubicacion={lat:19.4319526, lng:-99.1418086};
    map = new google.maps.Map(document.getElementById('map'),{
      center:miubicacion,
      scrollwheel:false,
      zoom:5
    });

    var marker= new google.maps.Marker({
      map:map,
      position:miubicacion,
      title:'uno'
    });*/
    //colo ca y borra marcadores
    /*var miubicacion= new google.maps.LatLng(19.4319526,-991418086);
    var opcionesmap={
       center:miubicacion,
       zoom:5
    }
    var map = new google.maps.Map(document.getElementById("map"),opcionesmap);

    var marker=new google.maps.Marker({
      position:miubicacion,
      title:'HOLA'
    });
    marker.setMap(null);*/
    //animacion de marcador
    var ubicacion={lat:19.4319526, lng:-99.1418086}
    var mapa = new google.maps.Map(document.getElementById("map"),{
      zoom: 13,
      center: ubicacion
    });
    var image='img/pin.png';
    var marker =new google.maps.Marker({
      map:mapa,
      draggadle: true,
      animation: google.maps.Animation.DROP,
      position:ubicacion,
      icon:image
    });
    marker.addListener('click',toggleBounce);
    setMarkers(mapa);
  }
  function toggleBounce(){
    //desactiva la animacion del marcador
    if(marker.getAnimacion() !== null){
      marker.setAnimation(null);
    }else{
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
</script>
<script async defer
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7NWXEzJ-RRutuDhaKuFTbVB9pnixS-j8&callback=initMap"></script>
  </body>
</html>