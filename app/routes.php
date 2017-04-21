<?php
	
	$w_routes = array(
		//accueil
		['GET|POST'      , '/'         , 'Default#home', 'default_home'],
		
		['GET|POST' , '/register'  ,'Security#register', 'security_register'], //inscription
		
	);