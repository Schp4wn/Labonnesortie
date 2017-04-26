<?php $this->layout('layout', ['title' => 'event_trajet']); ?>

<?php $this->start('main_content'); ?>

<form action="" method="post">

    <input type='text' name='depart' placeholder='Enter any address here' />
    <input type='text' name='arrivee' placeholder='Enter any address here' />
    <input type='submit' value='Geocode!' />

</form>
<?php

var_dump($_POST);
 ?>
<?php $this->stop('main_content'); ?>
