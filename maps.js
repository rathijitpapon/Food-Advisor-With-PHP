/* Set the width of the side navigation to 250px */

function showGoogleMaps(pos) {
	
	var latLng = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
	
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };

    map = new google.maps.Map(document.getElementById('googleMaps'),
        mapOptions);

    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}

navigator.geolocation.getCurrentPosition(showGoogleMaps);

google.maps.event.addDomListener(window, 'load', showGoogleMaps);
