<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use W\Security\AuthentificationManager;

use \Manager\GeneralManager;
use \Manager\Fil_actuManager;
use \Manager\PortfolioManager;

class AccueilController extends Controller {
    
	public function getListeMembre() { //affiche tout les membres de la bdd
		$this->allowTo(['admin','membre']);
		$user = $this->getUser();
		$manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
		$membres = $manager->findUserAll();

		$this->show('accueil/accueil', ['membres' => $membres]);

	}
	public function getProfilPerso() { //affiche tout les membres de la bdd
		$user = $this->getUser();
		$manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
		$ProfilPerso = $manager->findProfilPerso();

		$this->show('accueil/accueil',['ProfilPerso' => $ProfilPerso]);


	}
	
	public function postActu() {
		if (isset($_POST['actu']) ){
			$manager = new UserManager();
			$manager->update(['statut' => $_POST['texte_actu']], $_SESSION['user']['id']);
			$auth_manager = new AuthentificationManager(); 
			$auth_manager->refreshUser();
			$this->redirectToRoute('accueil');
		}
		$this->redirectToRoute('accueil');
	}



}