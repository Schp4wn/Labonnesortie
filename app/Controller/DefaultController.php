<?php

namespace Controller;

use Model\UserModel;
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

		// $user_manager = new UserModel();
		//
		// $user = $user_manager->find($id);

		// $this->show('default/profile/', ['user' => $user]);

		$this->show('default/profile');

	}

	 /**
	  * Page contact
	  */
	 public function contact()
	 {
	 	$this->show('default/contact');
	 }
}
