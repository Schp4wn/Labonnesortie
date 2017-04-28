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
	* Page de profil admin
	*/
	public function profileAdmin()
	{

		//redirection a une page d'erreur si on on n'est pas admin
		$this->allowTo('admin');

		$event_manager 	= new EventsModel();
		$user_manager		= new UserModel();
		$user = $user_manager->find($this->getUser()['id']);
		$events       	= $event_manager->findAll();
		$count_events 	= $event_manager->countEvents();
		$count_users 		= $user_manager->countUsers();
		$this->show('default/profileAdmin' , ['events' => $events, 'user' => $user, 'count_events' => $count_events, 'count_users' => $count_users]);

	}

	/**
	* Page pour afficher tous les utilisateurs
	*/
	public function userslist()
	{

		//redirection a une page d'erreur si on on n'est pas admin
		$this->allowTo('admin');

		$user_manager = new UserModel();
		$event_manager 	= new EventsModel();
		$user = $user_manager->find($this->getUser()['id']);
		$users       	= $user_manager->findAll();
		$count_events = $event_manager->countEvents();
		$count_users 	= $user_manager->countUsers();

		// Traitement du formulaire pour changer l'email; $_POST['button-email'] vient du name dans l'HTML pour différencier les deux formulaires
		foreach ($users as $user) {

			if (isset($_POST['button-'.$user['id']])) {
				$role = $_POST['role'];
				$id = $user['id'];
				$users = $user_manager->update(['role' => $role], $id);
			}
		}

		$users       	= $user_manager->findAll();
		$this->show('default/userslist' , ['users' => $users, 'user' => $user, 'count_events' => $count_events, 'count_users' => $count_users]);

	}

	/**
	 * Page de profil
	 */
	public function profile()
	{

		$this->allowTo('user');
   //ici on doit afficher les evenements lié a un utilisateur ici celui qui est connecté
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
