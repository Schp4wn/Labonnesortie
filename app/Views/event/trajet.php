<?php $this->layout('layout', ['title' => 'event_trajet']); ?>

<?php $this->start('main_content'); ?>

<form action="" method="post">

    <input type='text' name='depart' placeholder='Enter any address here' />
    <input type='text' name='arrivee' placeholder='Enter any address here' />
    <input type='submit' value='Geocode!' />

</form>
<?php
// if($_POST){
//
//     // get latitude, longitude and formatted address
//     $data_arr = geocode($_POST['depart']);
//
//     // if able to geocode the address
//     if($data_arr){
//
//         $latitude = $data_arr[0];
//         $longitude = $data_arr[1];
//         $formatted_address = $data_arr[2];
//
// }}
// if($_POST){
//
//     // get latitude, longitude and formatted address
//     $data_arr = geocode($_POST['arrivee']);
//
//     // if able to geocode the address
//     if($data_arr){
//
//         $latitude = $data_arr[0];
//         $longitude = $data_arr[1];
//         $formatted_address = $data_arr[2];
// }
// }
var_dump($_POST);
 ?>
<?php $this->stop('main_content'); ?>
