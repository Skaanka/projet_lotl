<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\GeneralManager;
use \W\Security\AuthentificationManager;

class DefaultController extends Controller {

	public function home() {
		$this->show('home/home');
	}

    public function accueil() {
		$this->show('accueil/accueil');
	}
    
    public function profil() {
		$this->show('default/profil');
	}
    
    public function consultation() {
		$this->show('default/consultation');
	}
    
    public function validation() {
		$this->show('home/validation');
	}

    
    public function login() {
		if(isset($_POST['connexion'])) {
			$auth = new AuthentificationManager();
			$userManager = new UserManager();
            $UserManagerSuite = new GeneralManager();
            
			if($auth->isValidLoginInfo($_POST['wuser']['mail'], $_POST['wuser']['mot_de_passe'])) {
                //selection table user
				$user = $userManager->getUserByUsernameOrEmail($_POST['wuser']['mail']);
				$auth->logUserIn($user);
                
                //recuperation de l'id de l'utilisateur connecté et jointure avec les autres tables.
                $id_user = $user['id'];
                $user2 = $UserManagerSuite->findAllLogUser($id_user);
                $_SESSION['user']['infos'] = $user2;
                // ajout de $user2 dans $user
                
                //debug($user);die();
                
				$this->redirectToRoute('accueil');
			}
		}
		$this->show('home/home');
	}
    
    public function logout() {
        
		$auth = new AuthentificationManager();
		$auth->logUserOut();
		$this->redirectToRoute('home');
	}

}