$(document).ready(function() {

});


initGmap = () => {
    map = new google.maps.Map(document.getElementById("gmap"), {
        scrollwheel: false,
        disableDefaultUI: true,
        clickableLabels: false,
        clickableIcons: false,
        zoomControl: true,
        zoomControlOptions: {position: google.maps.ControlPosition.LEFT_BOTTOM},
        scaleControl: true
    })

    marker = newMarker(new google.maps.LatLng(55.76678, 37.64141), map)
    map.setCenter(marker.getPosition())
    map.setZoom(16)
}

google.maps.event.addDomListener(window, "load", initGmap);

newMarker = function(latLng, map) {
  return new google.maps.Marker({
    map: map,
    position: latLng,
    lat: latLng.lat(),
    lng: latLng.lng(),
  });
};
