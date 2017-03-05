function initMap (){
	var ubicacion={lat:19.4319526, lng:-99.1418086};
	var map=new google.maps.Map(document.getElementById('map'),{
		zoom:3,
		center:ubicacion
	});
	var labels='abcdefghijklmnopqrstuvwxyz';
	var markers=locations.map(function(location,i){
		return new google.maps.Marker({
			position:location,
			label: labels[i%labels.length]
		});
	});

	var markerCluster = new markerCluster(map, markers,{imagePath:'http://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}

var locations =[
	{lat:19.4324945, lng:-99.0169327},
	{lat:19.4122119, lng:-98.9913004},
	{lat:19.3176524, lng:-98.9366256},
	{lat:19.265037, lng:-98.9171222},
	{lat:19.39068, lng:-99.2836987}
]
