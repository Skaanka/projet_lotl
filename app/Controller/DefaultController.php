<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {
		$this->show('default/home');
	}
    
    public function accueil() {
		$this->show('default/accueil');
	}
    
	    
    public function profil() {
		$this->show('default/profil');
	}
    
    public function consultation() {
		$this->show('default/consultation');
	}
    
    public function filtre() {
		$this->show('default/filtre');
	}

}