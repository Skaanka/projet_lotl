<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\GeneralManager;
use \Manager\Fil_actuManager;

class AccueilController extends Controller {

	public function getListeMembre() { //affiche tout les membres de la bdd
		$user = $this->getUser();
		$manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
		$membres = $manager->findUserAll();
        $manager2 = new Fil_actuManager(); // execute la function qui recupere TOUTES les tables de la bdd
		$fil_actus = $manager2->findLastFilActu5();
		$this->show('accueil/accueil', ['membres' => $membres, 'fil_actus' => $fil_actus]);
	}
    
    
}