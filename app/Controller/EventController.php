<?php

namespace Controller;

use \W\Controller\Controller;
use  Model\EventsModel;


class EventController extends Controller
{   

    public function create()
    {   
        $title   = null ;
        $event   = null ;
        $date    = null ;
        $message = null ;

        if(!empty($_POST))
        {
            $title = trim($_POST['title']);
            $event = trim($_POST['event']);
            $date  = date('Y-m-d H:i:s' , strtotime( $_POST['date'] ));

        //var_dump($_POST);

             $event_manager = new EventsModel();

             $errors=[];

             if( strlen($title) < 3 )
             {
                 $errors['title'] = "Le titre doit comporter 3 caractères minimum.";
             }

             if( strlen($event) < 15)
             {
                 $errors['event'] = "Votre paragraphes doit comporte 15 lignes minimum.";
             }
             if(!is_numeric(strtotime($_POST['date']) ) )
             {
                 $errors['date']= "Votre date doit etre au format days/Month/Years.";
             }

             if( empty($error) )
             {
                 $auth_manager = new \W\Security\AuthentificationModel();

            $result = $event_manager->insert([
                    'title'     => $title,
                    'event'     => $event,
                    'date_time' => $date,
                    'user_id'   => $this->getUser()['id']  // ici l'id de lutilisateur connecté $this->getuser()['id']
                  ]);

                 // var_dump($result);

                  $message = ["L'evenement a bien etait enregistré"];
             }
             else{
                 $errors = $message ;
             }
        }
        $this->show('event/create' , ['message' => $message  , 'title'=>$title , 'event' => $event ]);
    }
}