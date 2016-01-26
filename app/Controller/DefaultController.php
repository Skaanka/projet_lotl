<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
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
            
			if($auth->isValidLoginInfo($_POST['wuser']['mail'], $_POST['wuser']['mot_de_passe'])) {
				$user = $userManager->getUserByUsernameOrEmail($_POST['wuser']['mail']);
				$auth->logUserIn($user);
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