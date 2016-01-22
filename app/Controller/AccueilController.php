<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;

class AccueilController extends Controller {

	public function getListeMembre() { //affiche tout les membres de la bdd
		$user = $this->getUser();
		$manager = new UserManager();
		$membres = $manager->findAll();
		$this->show('accueil/accueil', ['membres' => $membres]);
	}
    
}