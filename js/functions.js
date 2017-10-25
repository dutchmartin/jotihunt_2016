// load json status every 90 seconds

setInterval(updatestatus(), 1000 * 90);
$(document).ready(function() {
	updatestatus();
});

function updatestatus() {

		var url = 'http://slaafke.be/workspace/maps/includes/teamstatus.php';


		$.get(url, function(data) {
			var letters = "ABCDEFGHIJ".split("");
			var x = 0;
			var num = Object.keys(data).length;
			while (x <= num) {
				$(Object.keys(data)[x]).css("color", data[Object.keys(data)[x]]);
				x++;
			}
		});
	}
	// fancybox function
$(document).ready(function() {
	$(".button").fancybox({
		maxWidth: 800,
		maxHeight: 800,
		fitToView: false,
		width: '70%',
		height: '80%',
		autoSize: false,
		closeClick: false,
		openEffect: 'none',
		closeEffect: 'none'
	});
});




// initialise google maps
var map;
var markers = [];

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {
			lat: 51.869987,
			lng: 5.737458
		},
		zoom: 11,
		minZoom: 9,
		streetViewControl: false
	});
	var ctaLayer = new google.maps.KmlLayer({
		url: 'http://cdn.jotihunt.net/jotihunt-2016.kml',
		map: map
	});
};

function addMarker(location) {
	var marker = new google.maps.Marker({
		position: location,
		map: map
	});
	markers.push(marker);
}


// Sets the map on all markers in the array.
function setMapOnAll(map) {
	for (var i = 0; i < markers.length; i++) {
		markers[i].setMap(map);
	}
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
	setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
	setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
	clearMarkers();
	markers = [];
}


function updateMarkers() {
	// load http://dev.slaafke.be/workspace/maps/includes/jsoncoord.php
	$.getJSON("./includes/jsoncoord.php", function(data) {

		jQuery.each(data, function(index, item) {
			var location = {
				lat: item.lat,
				lng: item.lng
			};
			addMarker(location);
		});
	});
}

function refreshMarkers() {
	deleteMarkers();
	updateMarkers();
}
$(document).ready(function() {
	setInterval(refreshMarkers(), 1000 * 30);
});