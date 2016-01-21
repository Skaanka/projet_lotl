<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	
    public function profil() {
		$this->show('default/profil');
	}
    
    public function consultation() {
		$this->show('default/consultation');
	}
    
}