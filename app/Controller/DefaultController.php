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
		$count_events 	= $event_manager->countEvents($this->getUser()['id']);
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

		$this->allowTo('user');
		$user_manager = new UserModel();
		$event_manager = new EventsModel();

		$event_manager = new EventsModel();

		$profil = $user_manager->findAll($this->getUser()['id']);
		//var_dump($profil);
		$count_events = $event_manager->countEvents($this->getUser()['id']);
		//var_dump($count_events);
		$profil_event = $user_manager->getAllEventsByUser($this->getUser()['id']);

		$count_events 	= $event_manager->countEventsOfUser($this->getUser()['id']); 

		$km =	$event_manager->countKmOfUser($this->getUser()['id']);

		$this->show('default/profile', [ 'km' => $km ,'count_events' => $count_events , 'profil' => $profil , 'profil_event' => $profil_event]);

	}

	 /**
	  * Page contact
	  */
	 public function contact()
	 {
	 	$this->show('default/contact');
	 }
	/**
		* Permet la connexion d'un utilisateur
	*/
	public function login()
	{

		if (isset($_POST['button-login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$auth_manager = new \W\Security\AuthentificationModel();

			$user_id = $auth_manager->isValidLoginInfo($username, $password);
			if ($user_id) { // Si le couple username/password est valid
				$user_manager = new UserModel();
				$user = $user_manager->find($user_id); // Récupére toutes les infos de l'utilisateur qui se connecte
				$auth_manager->logUserIn($user); // La connexion se fait
				$this->redirectToRoute('default_frontPage');
			}
		}

			$user_manager  = new UserModel();
			$event_manager = new EventsModel();
			$lastevent     = $event_manager->lastevent();

	// J'injecte la variable messages dans ma vue
	$this->show('default/frontPage', ['lastevent'=> $lastevent]);
	}

}
