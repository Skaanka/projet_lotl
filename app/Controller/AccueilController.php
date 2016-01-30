<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use W\Security\AuthentificationManager;

use \Manager\GeneralManager;
use \Manager\Fil_actuManager;
use \Manager\PortfolioManager;
use \Manager\RafraichirManager;

class AccueilController extends Controller {

    public function getListeMembre() { //affiche tout les membres de la bdd
        $this->allowTo(['admin','membre']);
        $user = $this->getUser();
        $manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
        $membres = $manager->findUserAll();
        $manager2 = new Fil_actuManager(); // execute la function qui recupere TOUTES les tables de la bdd
        $fil_actus = $manager2->findLastFilActu5();
        
        $auth_manager = new RafraichirManager(); 
        $auth_manager->refreshUserMulti();

        $this->show('accueil/accueil', ['membres' => $membres, 'fil_actus' => $fil_actus]);

    }


    public function getProfilPerso() { //affiche tout les membres de la bdd
        $user = $this->getUser();
        $manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
        $ProfilPerso = $manager->findProfilPerso();

        $this->show('accueil/accueil', ['ProfilPerso' => $ProfilPerso]);


    }

    public function postActu() {
        if (isset($_POST['actu']) ){
            $date = date("Y-m-d H:i:s");
            //debug($date);die();
            $manager = new Fil_actuManager();
            $manager->update(['message' => $_POST['texte_actu'], 'date' => $date], $_SESSION['user']['id']);
            
            $this->redirectToRoute('accueil');
        }
        $this->redirectToRoute('accueil');
    }



}