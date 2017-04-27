<?php

namespace Controller;

use Model\UserModel;
use Model\EventsModel;
use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	/**
	 * Page de profil
	 */
	public function profile()
	{

   //ici on doit afficher les evenement lié a un utilisateur ici celui qui est connecté
		//si lutilisateur n'a pas d'evenement message de empty evenement

		$user_manager = new UserModel();

		$profil = $user_manager->find($this->getUser()['id']);

		$profil_event = $user_manager->getAllEventsByUser($this->getUser()['id']);

		$this->show('default/profile', ['profil' => $profil , 'profil_event' => $profil_event]);

	}

	 /**
	  * Page contact
	  */
	 public function contact()
	 {
	 	$this->show('default/contact');
	 }
}
