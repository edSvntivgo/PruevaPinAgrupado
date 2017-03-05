var map;
  function initMap(){
    /* coloca un marcador +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
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
    //colo ca y borra marcadores +++++++++++++++++++++++++++++++++++++++++++++++++++++++
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
    //animacion de marcador++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    /*var ubicacion={lat:19.4319526, lng:-99.1418086}
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
    setMarkers(mapa);*/

    /*function toggleBounce(){
    //desactiva la animacion del marcador
    if(marker.getAnimacion() !== null){
      marker.setAnimation(null);
    }else{
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }*/


    //añadir mas de un marcador al mapa++++++++++++++++++++++++++++++++++++++++++++++++++++
    var ubicacion={lat:19.4319526, lng:-99.1418086}
    var map=new google.maps.Map(document.getElementById("map"),{
      zoom:10,
      center: ubicacion
    });
    setMarkers(map);
  }
  //creacion de arreglos por ubicacion de mayor a menor
  var ubicaciones=[
    ['Neza',19.4324945,-99.0169327,5],
    ['Chimalhuacan',19.4122119,-98.9913004,4],
    ['Ixtapaluca',19.3176524,-98.9366256,3],
    ['Chalco',19.265037,-98.9171222,2],
    ['CDMX',19.39068,-99.2836987,1],
  ];
  //funcion que obtiene los marcadores
  function setMarkers(map){
    //estilo al marcador
    var imagen={
      url:'img/pin.png',
      size: new google.maps.Size(45,55),
      origin: new google.maps.Point(0,0),
      anchor: new google.maps.Point(0,55)
    };
    
    var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
  };

    for (var i=0; i<ubicaciones.length; i++){
      var ubicado=ubicaciones[i];
      var marker= new google.maps.Marker({
        position:{lat: ubicado[1],lng: ubicado[2]},
        map:map,
        icon: imagen,
        shape:shape,
        title: ubicado[0],
        zIndex: ubicado[3]
      });
    }

  }
  