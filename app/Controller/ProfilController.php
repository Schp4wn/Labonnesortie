<?php

namespace Controller;

use \W\Controller\Controller;
use Model\UserModel;
use Model\EventsModel;


class ProfilController extends Controller
{
    public function index()
    {   //ici on doit afficher les evenement lié a un utilisateur ici celui qui est connecté
        //si lutilisateur n'a pas d'evenement message de empty evenement 
        
        $user_manager = new UserModel();

        $profil = $user_manager->find($this->getUser()['id']);

        $profil_event = $user_manager->getAllEventsByUser($this->getUser()['id']);

        $this->show('profil/index' , ['profil' => $profil , 'profil_event' => $profil_event]);
    }

    
}