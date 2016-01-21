<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\MembreManager; // utilise le manager MembreManager
use \W\Manager\UserManager;

class AccueilController extends Controller {
    
    public function accueil() {
		$this->show('accueil/accueil');
	}

	public function getListeMembre() { //affiche tout les membres de la bdd
		$user = $this->getUser();
		$manager = new MembreManager();
		$membres = $manager->findAll();
		$this->show('accueil/accueil', ['membres' => $membres]);
	}
    
}