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


        $title           = null;
        $event           = null;
        $date            = null;
        $image           = null;
        $message         = null;
        $depart          = null;
        $depart_lat      = null;
        $depart_long     = null;
        $arrivee         = null;
        $arrivee_lat     = null;
        $arrivee_long    = null;
        $arrivee_address = null;
        $depart_address  = null;

        if(!empty($_POST))
        {
            $title = trim($_POST['title']);
            $event = trim($_POST['event']);
            $image = trim($_POST['image']);
            $date  = date('Y-m-d H:i:s' , strtotime( $_POST['date'] ));
            $depart  = trim($_POST['depart']);
            $arrivee  = trim($_POST['arrivee']);

            $event_manager = new EventsModel();
            $coords = $this->setTrajet($depart, $arrivee);
            var_dump($coords);
            var_dump($coords['depart']);


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

             if( strlen( $depart ) <= 3 || empty($depart) )
             {
                 $errors['depart'] = "L'addresse de départ doit comporter 3 caractères minimum.";
             }

             if( strlen( $arrivee ) <= 3 || empty($arrivee) )
             {
               $errors['arrivee'] = "L'addresse d'arrivée doit comporter 3 caractères minimum.";
             }

             if( empty($errors) )
             {
                 $auth_manager = new \W\Security\AuthentificationModel();

            $result = $event_manager->insert([
                    'title'     => $title,
                    'event'     => $event,
                    'image'     => $image,
                    'date_time' => date('Y-m-d H:i:s' , strtotime( $_POST['date'] )),
                    'user_id'    => $this->getUser()['id'],  // ici l'id de lutilisateur connecté $this->getuser()['id']
                    'depart'     => $depart,
                    'depart_lat'     => $coords['depart']['depart_lat'],
                    'depart_long'     => $coords['depart']['depart_long'],
                    'depart_address'     => $coords['depart']['depart_address'],
                    'arrivee'     => $arrivee,
                    'arrivee_lat'     => $coords['arrivee']['arrivee_lat'],
                    'arrivee_long'     => $coords['arrivee']['arrivee_long'],
                    'arrivee_address'     => $coords['arrivee']['arrivee_address']

                  ]);
                  var_dump($coords);
                  var_dump($coords['depart']);
                  var_dump($coords['depart']['depart_lat']);
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
      //$this->allow('admin');


      $title           = null;
      $event           = null;
      $date            = null;
      $image           = null;
      $message         = null;
      $depart          = null;
      $depart_lat      = null;
      $depart_long     = null;
      $arrivee         = null;
      $arrivee_lat     = null;
      $arrivee_long    = null;
      $arrivee_address = null;
      $depart_address  = null;

      if(!empty($_POST))
      {
          $title = trim($_POST['title']);
          $event = trim($_POST['event']);
          $image = trim($_POST['image']);
          $date  = date('Y-m-d H:i:s' , strtotime( $_POST['date'] ));
          $depart  = trim($_POST['depart']);
          $arrivee  = trim($_POST['arrivee']);


          $event_manager = new EventsModel();
          $event = $event_manager->find($id); // Je vais chercher un evenement dans la bdd par son id
          $coords = $this->setTrajet($depart, $arrivee);
          var_dump($coords);
          var_dump($coords['depart']);


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

           if( strlen( $depart ) <= 3 || empty($depart) )
           {
               $errors['depart'] = "L'addresse de départ doit comporter 3 caractères minimum.";
           }

           if( strlen( $arrivee ) <= 3 || empty($arrivee) )
           {
             $errors['arrivee'] = "L'addresse d'arrivée doit comporter 3 caractères minimum.";
           }

           if( empty($errors) )
           {
               $auth_manager = new \W\Security\AuthentificationModel();

          $result = $event_manager->update([
                  'title'     => $title,
                  'event'     => $event,
                  'image'     => $image,
                  'date_time' => date('Y-m-d H:i:s' , strtotime( $_POST['date'] )),
                  'user_id'    => $this->getUser()['id'],  // ici l'id de lutilisateur connecté $this->getuser()['id']
                  'depart'     => $depart,
                  'depart_lat'     => $coords['depart']['depart_lat'],
                  'depart_long'     => $coords['depart']['depart_long'],
                  'depart_address'     => $coords['depart']['depart_address'],
                  'arrivee'     => $arrivee,
                  'arrivee_lat'     => $coords['arrivee']['arrivee_lat'],
                  'arrivee_long'     => $coords['arrivee']['arrivee_long'],
                  'arrivee_address'     => $coords['arrivee']['arrivee_address']

                ], $id);
                var_dump($coords);
                var_dump($coords['depart']);
                var_dump($coords['depart']['depart_lat']);
               //var_dump($result);

                $message = ["L'evenement a bien etait enregistré"];

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


  public function setTrajet($depart = null, $arrivee = null) {
    $arrivee_coord = $this->geocode($_POST['arrivee']);
    $depart_coord = $this->geocode($_POST['depart']);
    $tableau = [
      'depart' => [
        'depart_lat'     => $depart_coord[0],
        'depart_long'     => $depart_coord[1],
        'depart_address' => $depart_coord[2]

      ],
      'arrivee' => [
        'arrivee_lat' => $arrivee_coord[0],
        'arrivee_long'  => $arrivee_coord[1],
        'arrivee_address' => $arrivee_coord[2]

      ]
    ];
    return $tableau;

  }

  // public function trajet(){
  //
  //   $depart = null;
  //   $depart_lat = null;
  //   $depart_long = null;
  //   $arrivee = null;
  //   $arrivee_lat = null;
  //   $arrivee_long = null;
  //
  //   $event_manager = new EventsModel();
  //    $errors=[];
  //     if(!empty($_POST)){
  //       // get latitude, longitude and formatted address
  //       $depart_coord = $this->geocode($_POST['depart']);
  //       $depart = trim($_POST['depart']);
  //       $arrivee_coord = $this->geocode($_POST['arrivee']);
  //       $arrivee = trim($_POST['arrivee']);
  //
  //       // if able to geocode the address
  //         if($depart_coord){
  //         $depart_lat = $depart_coord[0];
  //         $depart_long = $depart_coord[1];
  //         $depart_address = $depart_coord[2];
  //
  //           var_dump($depart_coord);
  //         }
  //
  //         // if able to geocode the address
  //         if($arrivee_coord){
  //
  //           $arrivee_lat = $arrivee_coord[0];
  //           $arrivee_long  = $arrivee_coord[1];
  //           $arrive_address = $arrivee_coord[2];
  //
  //           var_dump($arrivee_coord);
  //         }
  //         if( strlen( $depart ) <= 3 || empty($depart) )
  //         {
  //             $errors['depart'] = "L'addresse de départ doit comporter 3 caractères minimum.";
  //         }
  //         if( strlen( $arrivee ) <= 3 || empty($arrivee) )
  //         {
  //           $errors['arrivee'] = "L'addresse d'arrivée doit comporter 3 caractères minimum.";
  //         }
  //         if( empty($errors) )
  //         {
  //             $auth_manager = new \W\Security\AuthentificationModel();
  //
  //             $result = $event_manager->insert([
  //                'depart'     => $depart,
  //                'depart_lat'     => $depart_lat,
  //                'depart_long'     => $depart_long,
  //                'arrivee'     => $arrivee,
  //                'arrivee_lat'     => $arrivee_lat,
  //                'arrivee_long'     => $arrivee_long
  //              ]);
  //
  //             //var_dump($result);
  //
  //              $message = ["L'evenement a bien etait enregistré"];
  //         }
  //         else{
  //             $message = $errors ;
  //         }
  //
  //
  //
  //   }
  //
  // $this->show('event/trajet');
  // }


}
