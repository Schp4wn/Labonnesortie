<?php $this->layout('layout', ['title' => 'Ajouté un evenelent']) ?>

<?php $this->start('main_content') ?>


    <div class="container">
      <h1>Ajouter un evenement</h1>

      <form class="col-lg-7" method="POST">

        <div class="form-group <?= (isset($message['title'])) ? 'has-error' : ''?>">
          <label for="title">Titre :</label>
          <input type="text" class="form-control" name="title" value="">
          <?= (isset($message['title'])) ? '<span class="help-block">'.$message['title'].' .</span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['event'])) ? 'has-error' : ''?>">
          <label for="event">contenu :</label>
          <textarea type="text" class="form-control" name="event" value=""></textarea>
          <?= (isset($message['event'])) ? '<span class="help-block">'.$message['event'].' .</span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['date'])) ? 'has-error' : ''?>">
          <label for="date">Date de l'evenement :</label>
          <input type="date" class="form-control" name="date"  placeholder="xx/xx/xxxx  ">

          <label for="hour">Heure :</label>
          <input type="time"  class="form-control" name="hour" placeholder="Heure:Min">
          <?= (isset($message['date'])) ? '<span class="help-block">'.$message['date'].' .</span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['image'])) ? 'has-error' : ''?>">
          <label for="image">Image  :</label>
          <input type="text" class="form-control" name="image"  placeholder="Url ...">
          <?= (isset($message['image'])) ? '<span class="help-block">'.$message['image'].' .</span>'  : '' ?>
        </div>
        <hr>
        <div class="form-group">
          <label for="depart">Départ :</label>
          <input type='text' name='depart' class="form-control user_input_autocomplete_address" placeholder="Entrez une addresse de départ" />
        </div>
        <div class="form-group">
          <label for="arrivee">Arrivée :</label>
          <input type='text' name='arrivee' class="form-control" placeholder="Entrez une addresse de d\'arrive" />
        </div>


        <button id="publie" type="submit" class="btn btn-default">Publier larticle</button>

      </form>
      <?php
          if ( isset($message['success']) ){
                echo '<h1 class="text-success">' . $mess . '</h1>';
            }
      ?>


      <?php  ?>
    </div>

<?php $this->stop('main_content') ?>

<?php $this->start('javascript'); ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDw-gYmqJqQ-8RYU_8LZoTNFyQ51_yWYCY" type="text/javascript"></script>
<script type="text/javascript">
function initializeAutocomplete(id) {
  var element = document.getElementById(id);
  if (element) {
    var autocomplete = new google.maps.places.Autocomplete(element, { types: ['geocode'] });
    google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
  }
}

function onPlaceChanged() {
  var place = this.getPlace();

  // console.log(place);  // Uncomment this line to view the full object returned by Google API.

  for (var i in place.address_components) {
    var component = place.address_components[i];
    for (var j in component.types) {  // Some types are ["country", "political"]
    var type_element = document.getElementById(component.types[j]);
    if (type_element) {
      type_element.value = component.long_name;
    }
  }
}
}

google.maps.event.addDomListener(window, 'load', function() {
  initializeAutocomplete('user_input_autocomplete_address');
});

// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
</script>
<?php $this->stop('javascript'); ?>
