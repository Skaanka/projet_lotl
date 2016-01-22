<?php
	
	$w_routes = array(
        
        // méthode, url, controlleur#action, nom de la route
        
        ['GET', '/', 'Default#home', 'home'], // lorsque l'utilisateur n'est pas connecté
		['GET', '/accueil', 'Default#accueil', 'accueil'], // quand l'utilisateur est connecté
        
		['GET|POST', '/inscription1', 'Inscription#inscription_1', 'inscription1'],
        ['GET|POST', '/inscription2', 'Inscription#inscription_2', 'inscription2'],
        ['GET|POST', '/inscription3', 'Inscription#inscription_3', 'inscription3'],// formulaire d'inscription
                 
		['GET', '/profil', 'Default#profil', 'profil'], // affichage du profil perso
		['GET', '/consultation', 'Default#consultation', 'consultation'], // affichage des pages des utilisateurs du site 
		['GET', '/filtre', 'Default#filtre', 'filtre'], // affichage des pages des utilisateurs du site 
		['GET', '/validation', 'Default#validation', 'validation'], 
        
        
        //Routes inscription bdd
        //['GET', '/im', 'Inscription#insertMembre', 'home'], 
	);