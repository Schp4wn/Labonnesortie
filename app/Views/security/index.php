<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!--<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
	<script src="js/functions.js"></script>-->
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
  <h1>TEST de la Map</h1>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        // Élément HTML à donner à l'API
        var mapDiv = document.getElementById('map');

        // Création d'un objet Map
        map = new google.maps.Map(mapDiv, {
            // Le paramètre 'center' est un tableau de coordonnées pour centrer la carte
            center: {lat: -34.397, lng: 150.644},
            // Niveau de zoom
            zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
    async defer></script>
  </body>
</html>
</body>
</html>