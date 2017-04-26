<?php

namespace Controller;

use \W\Controller\Controller;
use  Model\EventsModel;


class EventController extends Controller
{

    /**
      *  On creer un evenements
      *
     **/
    public function create(){
        //$this->allow('admin');


        $title        = null ;
        $event        = null ;
        $date         = null ;
        $image        = null ;
        $depart_text  = null ;
        $arrive_text  = null ;
        $message      = null ;

        if(!empty($_POST))
        {
            $title = trim($_POST['title']);
            $event = trim($_POST['event']);
            $image = trim($_POST['image']);
            $date  = date('Y-m-d H:i:s' , strtotime( $_POST['date'] ));
            $depart_text  = trim($_POST['depart_text']);
            $arrive_text  = trim($_POST['arrive_text']);

             $event_manager = new EventsModel();

             $errors=[];

             if( strlen( $title ) < 3 || empty($title) )
             {
                 $errors['title'] = "Le titre doit comporter 3 caractères minimum.";
             }

             if( strlen( $event ) < 15 || empty($event))
             {
                 $errors['event'] = "Votre paragraphes doit comporte 15 lignes minimum.";
             }

             if(!filter_var($image, FILTER_VALIDATE_URL) === true )
             {
                 $errors['image'] = "Votre url doit etre valide";
             }

             if(  empty( $date ) )
             {
                 $errors['date']= "Votre date doit etre au format Année/Mois/Jours .";
             }

             if( empty($errors) )
             {
                 $auth_manager = new \W\Security\AuthentificationModel();

            $result = $event_manager->insert([
                    'title'     => $title,
                    'event'     => $event,
                    'image'     => $image,
                    'date_time' => date('Y-m-d H:i:s' , strtotime( $_POST['date'] )),
                    'user_id'    => $this->getUser()['id']  // ici l'id de lutilisateur connecté $this->getuser()['id']
                  ]);

                 //var_dump($result);

                  $message = ["L'evenement a bien etait enregistré"];
             }
             else{
                 $message = $errors ;
             }
        }
        $this->show('event/create' , ['message' => $message  , 'title'=>$title , 'event' => $event ]);
    }

    /**
      *  Recupère un seul évènement
      *
     **/
    public function view($id){

        // $this->allow(['admin' , 'user']);


        $event_manager = new EventsModel();

        $event = $event_manager->find($id);
        $this->show('event/view' , ['event'=> $event]);
    }

    /**
      *  Recupère tous les évènement
      *
     **/
    public function index(){
        // $this->allow(['admin' , 'user']);

        $event_manager = new EventsModel();
        $events =  $event_manager->findAll();
        $this->show('event/index' , ['events' => $events]);
    }

    /**
     * Edition d'un article
    */
    public function update($id){
        $title   = null ;
        $event   = null ;
        $date    = null ;
        $depart_text  = null;
        $arrive_text  = null;
        $image   = null ;

        $message = null ;
        // $this->allowTo(['admin', 'user']);

        $event_manager = new EventsModel();
        $event = $event_manager->find($id); // Je vais chercher un evenement dans la bdd par son id

        if (!empty($_POST)) {
          $title = trim($_POST['title']);
          $event = trim($_POST['event']);
          $date  = date('Y-m-d H:i:s' , strtotime( $_POST['date'] ));
          $image = trim($_POST['image']);
          $depart_text  = trim($_POST['depart_text']);
          $arrive_text  = trim($_POST['arrive_text']);

          $event_manager = new EventsModel();

          $errors=[];


          if( strlen($title) < 3 || empty($title) )
          {
              $errors['title'] = "Le titre doit comporter 3 caractères minimum.";
          }


          if( strlen($event) < 15 && !empty($title))
          {
              $errors['event'] = "Votre paragraphes doit comporte 15 lignes minimum.";
          }
          if(!is_numeric(strtotime($_POST['date']) )  && !empty($date))

          {
              $errors['date']= "Votre date doit etre au format Année/Mois/Jours .";
          }

         if(!filter_var($image, FILTER_VALIDATE_URL) === true )
         {
             $errors['image'] = "Votre url doit etre valide";
         }

          if( empty($error) )
          {
              $auth_manager = new \W\Security\AuthentificationModel();

         $result = $event_manager->update([
                 'title'     => $title,
                 'event'     => $event,
                 'depart_text'=> $depart_text,
                 'arrive_text'=> $arrive_text,
                 'image'     => $image,
                 'date_time' => date('Y-m-d H:i:s' , strtotime( $_POST['date'] ))
                   // ici l'id de lutilisateur connecté $this->getuser()['id']
               ], $id);

              // var_dump($result);

               $message = ["L'evenement a bien etait enregistré"];
               $this->redirectToRoute('event_index');
          }
          else{
              $message = $errors ;
          }
        }

        $this->show('event/update' , ['message' => $message  , 'title'=>$title , 'event' => $event ]);
    }

    //on recupere l'id de l'article avec l'url pour le supprimer
  public function delete($id)
  {
    $event_manager = new EventsModel();
    $event_manager->delete($id); // ici on supprime l'article de la bdd

    $this->redirectToRoute('event_index');
    //var_dump($id);
  }

  // function to geocode address, it will return false if unable to geocode address
  public function geocode($address){

    // url encode the address
    $address = urlencode($address);

    // google map geocode api url
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";

    // get the json response
    $resp_json = file_get_contents($url);

    // decode the json
    $resp = json_decode($resp_json, true);

    // response status will be 'OK', if able to geocode given address
    if ($resp['status'] === 'OK') {

        // get the important data
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];

        // verify if data is complete
        if ($lati && $longi && $formatted_address) {

            // put the data in the array
            $data_arr = array();
            array_push($data_arr, $lati, $longi, $formatted_address);

            return $data_arr;
        }
    }

    return false;
  }

  public function trajet()
  {
      if(!empty($_POST)){

          // get latitude, longitude and formatted address
          $data_arr = $this->geocode($_POST['depart']);

          // if able to geocode the address
          if($data_arr){
              $latitude = $data_arr[0];
              $longitude = $data_arr[1];
              $formatted_address = $data_arr[2];

      }
      var_dump($data_arr);
      }

      if(!empty($_POST)){

          // get latitude, longitude and formatted address
          $data_arr = $this->geocode($_POST['arrivee']);

          // if able to geocode the address
          if($data_arr){

              $latitude = $data_arr[0];
              $longitude = $data_arr[1];
              $formatted_address = $data_arr[2];
      }
      var_dump($data_arr);
      }
  $this->show('event/trajet');
  }


}
