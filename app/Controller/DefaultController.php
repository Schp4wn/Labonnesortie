<?php

namespace Controller;

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
	  * Page d'accueil après avoir cliqué sur la carte
	  */
	 public function frontPage()
	 {
	 	$this->show('default/frontPage');
	 }

	 /**
	  * Page contact
	  */
	 public function contact()
	 {
	 	$this->show('default/contact');
	 }
}
