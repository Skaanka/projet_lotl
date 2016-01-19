<?php
	
	$w_routes = array(
        
        // méthode, url, controlleur#action, nom de la route
        
        ['GET', '/', 'Default#home', 'home'], // lorsque l'utilisateur n'est pas connecté
		['GET', '/accueil', 'Default#accueil', 'accueil'], // quand l'utilisateur est connecté
        
		['GET', '/inscription', 'Default#inscription', 'inscription'],
        ['GET', '/inscription2', 'Default#inscription', 'inscription2'],
        ['GET', '/inscription3', 'Default#inscription', 'inscription3'],// formulaire d'inscription
                
		['GET', '/profil', 'Default#profil', 'profil'], // affichage du profil perso
		['GET', '/consultation', 'Default#consultation', 'consultation'], // affichage des pages des utilisateurs du site 
		['GET', '/filtre', 'Default#filtre', 'filtre'], // affichage des pages des utilisateurs du site 
	);