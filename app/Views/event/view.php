<?php $this->layout('layout', ['title' => 'Un évènement']); ?>

<?php $this->start('main_content'); ?>

	<div class="container">
		<div class="sd-entete-map">
			<div class="col-md-6">
				<h1><?= $event['title']; ?></h1>
				<p><?php echo $event['event'] ?></p>
			</div>
			<div>
				<img src="<?= $event['image']; ?>" alt="">
			</div>
		</div>
		<h1 class="text-center">Parcours</h1>
		<div id="gmap_canvas" style="height:400px">.</div>
        <div id='map-label'></div>
  
			<?php //$event['depart_lat']; ?>
			<?php //$event['depart_long']; ?>
			<?php //$event['arrivee_lat']; ?>
			<?php //$event['arrivee_long']; ?>
			
            <p>Evenement posté le  <?php
					$datetime = new DateTime($event['date_time']);
					// La class IntlDateFormatter est disponible dans l'extension php_intl. Il faut donc vérifier qu'elle soit bien installée dans le php.ini (extension=php_intl.dll)
					// http://benjamin.leveque.me/formater-une-date-avec-php-5-3-l10n-partie-2.html
					$intl = new IntlDateFormatter(
							'fr_FR',
							IntlDateFormatter::FULL,
							IntlDateFormatter::MEDIUM
					);
					echo $intl->format($datetime);
				?>
			</p>
	</div>
  

<?php $this->stop('main_content'); ?>

<?php $this->start('javascript'); ?>

  <script type="text/javascript"> 

    function initMap() {
  	var pointA = new google.maps.LatLng(<?= $event['depart_lat'];?>,<?= $event['depart_long'] ;?>),
    		pointB = new google.maps.LatLng(<?=  $event['arrivee_lat'];?>, <?=  $event['arrivee_long']; ?>),
    myOptions = {
      zoom: 25,
      center: pointA
    },
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions),
    // Instantiate a directions service.
    directionsService = new google.maps.DirectionsService,
    directionsDisplay = new google.maps.DirectionsRenderer({
      map: map
    }),
    markerA = new google.maps.Marker({
      position: pointA,
      title: "point A",
      label: "A",
      map: map
    }),
    markerB = new google.maps.Marker({
      position: pointB,
      title: "point B",
      label: "B",
      map: map
    });

  // get route from A to B
  calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

	}



	function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
	directionsService.route({
		origin: pointA,
		destination: pointB,
		travelMode: google.maps.TravelMode.DRIVING
	}, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
		} else {
		window.alert('Directions request failed due to ' + status);
			}
		});
	}
    </script>

<?php $this->stop('javascript'); ?>