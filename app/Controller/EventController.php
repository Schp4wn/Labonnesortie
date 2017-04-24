<?php

namespace Controller;

use \W\Controller\Controller;
use  Model\EventsModel;


class EventController extends Controller
{   

    public function create()
    {   
        $this->allow('admin');

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

             if( strlen($title) < 3 && !empty($title) )
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
                 $message = $errors ;
             }
        }
        $this->show('event/create' , ['message' => $message  , 'title'=>$title , 'event' => $event ]);
    }

    public function view($id)
    {   
        $event_manager = new EventsModel();  
        $event = $event_manager->find($id);
        $this->show('event/view' , ['event'=> $event]);
    }

    public function index()
    {
        $event_manager = new EventsModel();
        $events =  $event_manager->findAll();
        $this->show('event/index' , ['events' => $events]);
    }
}