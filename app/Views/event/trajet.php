<?php $this->layout('layout', ['title' => 'event_trajet']); ?>

<?php $this->start('main_content'); ?>

<form action="" method="post">

    <input type='text' name='depart' placeholder="Entrez une addresse de départ" />
    <input type='text' name='arrivee' placeholder="Entrez une addresse de d\'arrive" />
    <input type='submit' value='Geocode!' />

</form>




<?php $this->stop('main_content'); ?>
