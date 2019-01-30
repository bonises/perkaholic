<div>
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
AIzaSyBnHD6kpP1SsEYiUiIug97-QCfknoHgGZs
-24.3636964,-46.7675698,10.26z
<div id="map"></div>
<script> 
      var marker;

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: -24.3636964, lng: -46.7675698}
  });

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: -24.3636964, lng: -46.7675698}
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
    </script> 
    <script async defer 
    src= 
"https://maps.googleapis.com/maps/api/js?key=AIzaSyDEXOhXAL93Kcd2yEIg8D976GD_8SLVFxc&callback=initMap"> 
    </script>