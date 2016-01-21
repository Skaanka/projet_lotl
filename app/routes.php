<?php
	
	$w_routes = array(
        
        ['GET', '/', 'Default#home', 'home'], // lorsque l'utilisateur est connecté
		['GET', '/accueil', 'Accueil#getListeMembre', 'accueil'], // quand l'utilisateur n'est pas connecté
        
		['GET', '/inscription', 'Default#inscription', 'inscription'], // formulaire d'inscription
		['GET', '/profil', 'Default#profil', 'profil'], // affichage du profil perso
		['GET', '/consultation', 'Default#consultation', 'consultation'], // affichage des pages des utilisateurs du site 
		['GET', '/filtre', 'Default#filtre', 'filtre'], // affichage des pages des utilisateurs du site 
	);