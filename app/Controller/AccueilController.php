<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\GeneralManager;

class AccueilController extends Controller {

	public function getListeMembre() { //affiche tout les membres de la bdd
		$user = $this->getUser();
		$manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
		$membres = $manager->findUserAll();
		$this->show('accueil/accueil', ['membres' => $membres]);
	}
    
    
}