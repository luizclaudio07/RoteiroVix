$(document).ready(function(){

	var map;

	function inicio() {
		var latlng = new google.maps.LatLng(-20.300769, -40.291355);

		var options = {
			zoom: 15,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI:true
		};

	map = new google.maps.Map(document.getElementById("mapa"), options);

	
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(-20.300769, -40.291355),
    title: "Meu ponto personalizado! :-D",
    codLocal: 123,
    map: map
});

var marker2 = new google.maps.Marker({
    position: new google.maps.LatLng(-20.300769, -40.291935),
    title: "Meu ponto personalizado! :-D",
    codLocal: 321,
    map: map
});

 
    
 
    google.maps.event.addListener(marker, 'click', function (e) {
        console.log(this);
    });

  google.maps.event.addListener(marker2, 'click', function (e) {
        console.log(this);
    });



	}

	inicio();
	



});