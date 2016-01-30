<?php
	
	$w_routes = array(
        
        // GESTION DES PAGES ACCUEIL
        ['GET', '/', 'Home#home', 'home'], // lorsque l'utilisateur n'est pas connecté
		['GET', '/accueil', 'Accueil#getListeMembre', 'accueil'], // quand l'utilisateur est connecté
        
        
        //INTEFACE ADMIN
		['GET|POST', '/administration', 'Administration#administration', 'administration'], 
		['GET', '/administration/validation/[:id]', 'Administration#validationProfil', 'validationProfil'], // validation profil
		['GET', '/administration/refus/[i:id]', 'Administration#deleteProfil', 'RefusProfil'], // Refus profil
        
        // GESTION OUBLIE MDP
        ['GET|POST', '/oubli', 'Home#oubli', 'oubli'], // demande de token
		['GET|POST', '/nouveau/[:token]/[:id]', 'Home#nouveau', 'nouveau'], // page de redéfintion du mot de passe en cas d'oubli.
        
        // GESTION LOGIN / LOGOFF
		['GET|POST', '/login', 'Log#login', 'login'], 
        ['GET|POST', '/logout', 'Log#logout', 'logout'], 

        
        // GESTION FORMULAIRE INSCRIPTION
		['GET|POST', '/inscription1', 'Inscription#inscription_1', 'inscription1'],
        ['GET|POST', '/inscription2', 'Inscription#inscription_2', 'inscription2'],
        ['GET|POST', '/inscription3', 'Inscription#inscription_3', 'inscription3'],// formulaire d'inscription
		['GET', '/validation', 'Inscription#validation', 'validation'], 

		// GESTION FORMULAIRE MODIFICATION
		['GET|POST', '/modif_profil1', 'ModifProfil#modif_profil1', 'modif_profil1'],
        ['GET|POST', '/modif_profil2', 'ModifProfil#modif_profil2', 'modif_profil2'],
        ['GET|POST', '/modif_profil3', 'ModifProfil#modif_profil3', 'modif_profil3'],// formulaire modification profil perso
        
        //modification actualité
        ['POST', '/postactu', 'Accueil#postActu', 'postactu'], 
        
        

        
        
	);