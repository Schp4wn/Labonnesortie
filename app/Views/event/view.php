<?php $this->layout('layout', ['title' => 'Un évènement']); ?>

<?php $this->start('main_content'); ?>

<div id="sd-entete-map">
		<div class="container well">
			<div class="col-md-6 col-md-push-6">
				<h1><?= $event['title']; ?></h1>
				<p><?php echo $event['event'] ?></p>
				<p>Date de l'evenement : <?php echo date('d-m-Y' ,strtotime($event['date_time'])) ?></p>
				<p>Heure de l'evenement : <?php echo $event['hour'] ?></p>
				<br />
				<p>Evenement posté le  <?php
				$datetime = new DateTime($event['post']);
				// La class IntlDateFormatter est disponible dans l'extension php_intl. Il faut donc vérifier qu'elle soit bien installée dans le php.ini (extension=php_intl.dll)
				// http://benjamin.leveque.me/formater-une-date-avec-php-5-3-l10n-partie-2.html
				$intl = new IntlDateFormatter(
						'fr_FR',
						IntlDateFormatter::FULL,
						IntlDateFormatter::MEDIUM
				);
				echo $intl->format($datetime);?></p>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<div class="profil-img">
					<img class="img-responsive" src="<?= $event['image']; ?>" alt="">
				</div>
			</div>
		</div>
		<div class="parcours">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					  <div class="col-md-5">
							<h1 class="text-center">Parcours :</h1>
							<ul class="list-unstyled text-center">
								<li><h4>Départ : <span><?php echo $event['depart'] ?></span></h4></li>
								<li><h4>Arrivé : <span><?php echo $event['arrivee'] ?></span></h4></li>
								<li><h4>Distance : <span><?php echo $event['distance'] ?></span></h4></li>
								<li><h4>Temp estimé : <span><?php echo $event['temps_dist'] ?></span></h4></li>
							</ul>
						  <div id="gmap_canvas" style="height:400px"></div>
				      <div id='map-label'></div>
						</div>

						<div class="col-md-5 col-md-push-1">
							<h3>Participants à cet événement :</h3>
							<?php var_dump($subscribers_event); ?>
							<ul>
								<?php foreach ($subscribers_event as $subscriber): ?>
									<li><?= $subscriber['username']; ?></li>
								<?php endforeach; ?>
							</ul>
							S'inscrire
						</div>
					</div>
				</div>
			</div>
		</div>
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
