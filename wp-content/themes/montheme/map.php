<h5>Carte</h5>
<div id="map-box" style="height:400px;width:100%"></div>
<script type="text/javascript">

	var map;

	map=L.map('map-box',{
		center:[46,0.8],
		zoom:5
	});

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    	attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	/*var marker_53=L.marker([46.361153,4.683565]).addTo(map);
	var popup_53=L.popup().setContent('EglisedeSOLOGNY');
	popup_53.post_id=53;*/

 	<?php echo getMarkerList() ?>
</script>