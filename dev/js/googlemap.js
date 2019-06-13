function initMap() {
	var gressholman = { lat: 68.672210, lng: 16.620097 };
	var map = new google.maps.Map( document.getElementById( 'map' ), {
		zoom: 9,
		center: gressholman});
	var marker = new google.maps.Marker({position: gressholman, map: map});
}
