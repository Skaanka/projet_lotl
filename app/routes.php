<?php
	
	$w_routes = array(
        
        // GESTION DES PAGES ACCUEIL
        ['GET', '/', 'Default#home', 'home'], // lorsque l'utilisateur n'est pas connecté
		['GET', '/accueil', 'Accueil#getListeMembre', 'accueil'], // quand l'utilisateur est connecté
//		['GET', '/accueil/[:id]', 'Accueil#getPortfolio', 'accueil_portfolio'], // quand l'utilisateur est connecté
		['POST', '/postactu', 'Accueil#postActu', 'postactu'], // lorsque l'utilisateur n'est pas connecté
        
        // GESTION LOGIN / LOGOFF
		['GET|POST', '/login', 'Default#login', 'login'], 
        ['GET|POST', '/logout', 'Default#logout', 'logout'], 

        // GESTION FORMULAIRE INSCRIPTION
		['GET|POST', '/inscription1', 'Inscription#inscription_1', 'inscription1'],
        ['GET|POST', '/inscription2', 'Inscription#inscription_2', 'inscription2'],
        ['GET|POST', '/inscription3', 'Inscription#inscription_3', 'inscription3'],// formulaire d'inscription
        
        // EN ATTENTE
		['GET', '/profil', 'Default#profil', 'profil'], // affichage du profil perso
		['GET', '/consultation', 'Default#consultation', 'consultation'], // affichage des pages des utilisateurs du site 
		['GET', '/filtre', 'Default#filtre', 'filtre'], // affichage des pages des utilisateurs du site 
		['GET', '/validation', 'Default#validation', 'validation'], 
		
		// GESTION FORMULAIRE MODIFICATION
		['GET|POST', '/modif_profil1', 'ModifProfil#modif_profil1', 'modif_profil1'],
        ['GET|POST', '/modif_profil2', 'ModifProfil#modif_profil2', 'modif_profil2'],
        ['GET|POST', '/modif_profil3', 'ModifProfil#modif_profil3', 'modif_profil3'],// formulaire d'inscription
        
        
	);