<?php

	$w_routes = array(

		['GET', '/', 'Default#home', 'default_home'],//page d'acceuil
		['GET|POST', '/frontpage', 'Default#frontPage', 'default_frontPage'],//page d'acceuil après avoir cliqué sur la carte

		//Dans le fichier je Crée le controller ContactController
		['GET|POST', '/contact', 'Default#contact', 'default_contact'], //affiche la page contact

		//Dans le fichier je Crée le controller SecurityController
		['GET|POST', '/login'   , 'Security#login'   , 'security_login'],    //connexion
		['GET|POST', '/register', 'Security#register', 'security_register'], //inscription
		['GET|POST', '/logout'  , 'Security#logout'  , 'security_logout'],   //deconnexion
		['GET|POST', '/forget'  , 'Security#forget'  , 'security_forget'],   //mot de passe oublié


		//Dans le fichier je Crée le controller EventController
		['GET|POST', '/event',               'Event#index' , 'event_index'],  //afficher un evenement
		['GET|POST', '/event/create'       , 'Event#create', 'event_create'], //add un evenement
		['GET|POST', '/event/update/[i:id]', 'Event#update', 'event_update'], //modifie un evenement
		['GET|POST', '/event/delete/[i:id]', 'Event#delete', 'event_delete'], //supprime un evenement
		['GET|POST', '/event/[i:id]'       ,  'Event#view' , 'event_view'  ], //affiche un seule event precis (avec l'id)

		//Dans le fichier je Crée le controller WayController
		['GET|POST', '/way'       , 'Way#index' , 'way_index' ], //afficher un trajet
		['GET|POST', '/way/create', 'Way#create', 'way_create'], //add un trajet
		['GET|POST', '/way/update', 'Way#update', 'way_update'], //modifie un trajet
		['GET|POST', '/way/delete', 'Way#delete', 'way_delete'], //supprime un trajet

		//Dans le fichier je Crée le controller ProfilController
		['GET|POST', '/profil'    , 'Profil#index', 'profil_index'], //affiche la page profil
	);
