<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;

class InscriptionController extends Controller
{


    public function inscription_1() 
    {
        if(isset($_POST['suivant'])) {
            $_SESSION['wuser'] = $_POST['wuser'];
            $_SESSION['membre'] = $_POST['membre'];
            //debug();die()
            $this->redirectToRoute('inscription2'); // si ok envoie page 2
        }

        $this->show('default/inscription1'); // redirection si erreur
    }

    public function inscription_2() 
    {
        if(isset($_POST['suivant2'])) {
            $_SESSION['diplome'] = $_POST['diplome'];
            $_SESSION['diplome2'] = $_POST['diplome2'];
            $_SESSION['diplome3'] = $_POST['diplome3'];
            $_SESSION['diplome4'] = $_POST['diplome4'];

            $_SESSION['experience_pro'] = $_POST['experience_pro'];
            $_SESSION['experience_pro2'] = $_POST['experience_pro2'];
            $_SESSION['experience_pro3'] = $_POST['experience_pro3'];
            $_SESSION['experience_pro4'] = $_POST['experience_pro4'];
            $_SESSION['experience_pro5'] = $_POST['experience_pro5'];
            $_SESSION['experience_pro6'] = $_POST['experience_pro6'];

            $_SESSION['competence'] = $_POST['competence'];
            $_SESSION['fil_actu'] = $_POST['fil_actu'];
            $_SESSION['portfolio'] = $_POST['portfolio'];

            $this->redirectToRoute('inscription3'); // si ok envoie page 2
        } elseif (isset($_POST['precedent'])) {
            $_SESSION['inscription_2'] = $_POST['inscription_2'];
            $this->redirectToRoute('inscription1'); // si précédent retour page 1
        }

        $this->show('default/inscription2'); // redirection si erreur
    }

    public function inscription_3() 
    {
        if(isset($_POST['valider'])) {
            $_SESSION['reseaux_social'] = $_POST['reseaux_social'];
            $_SESSION['reseaux_pro'] = $_POST['reseaux_pro'];
            $_SESSION['reseaux_divertissement'] = $_POST['reseaux_divertissement'];



            //debug($inscription); die();
            $manager = new UserManager();

            // insert page formulaire 1
            $manager->insertUser($_SESSION['wuser']); //enregistrement membre dans BDD
            $mail = $_SESSION['wuser']['mail']; // recuperation du mail dans une variable

            $manager = new WuserManager();
            $membre = $manager->find($mail);
            $membre['id'];
            
            // utiliser l'id de $membre pour l'ajouter e ntemps que id_membre dans les autres SESSION
            
            //suite insert formulaire 1
            $manager = new MembreManager();
            $manager->insertMembre($_SESSION['membre']);
            
            // insert page formulaire 2
            $manager = new DiplomeManager();
            $manager->insertDataMembre($_SESSION['diplome']);
            $manager->insertDataMembre($_SESSION['diplome2']);
            $manager->insertDataMembre($_SESSION['diplome3']);
            $manager->insertDataMembre($_SESSION['diplome4']);
            
            $manager = new Experience_proManager();
            $manager->insertDataMembre($_SESSION['experience_pro']);
            $manager->insertDataMembre($_SESSION['experience_pro2']);
            $manager->insertDataMembre($_SESSION['experience_pro3']);
            $manager->insertDataMembre($_SESSION['experience_pro4']);
            $manager->insertDataMembre($_SESSION['experience_pro5']);
            $manager->insertDataMembre($_SESSION['experience_pro6']);

            $manager = new CompetenceManager();
            $manager->insertDataMembre($_SESSION['competence']);
            
            $manager = new Fil_actuManager();
            $manager->insertDataMembre($_SESSION['fil_actu']);
            
            $manager = new PortfolioManager();
            $manager->insertDataMembre($_SESSION['portfolio']);

            // insert page formulaire 3
            $manager = new Reseaux_socialManager();
            $manager->insertDataMembre($_SESSION['reseaux_social']);
            
            $manager = new Reseaux_proManager();
            $manager->insertDataMembre($_SESSION['reseaux_pro']);
            
            $manager = new Reseaux_divertissementManager();
            $manager->insertDataMembre($_SESSION['reseaux_divertissement']);
            
            

            $this->redirectToRoute('inscription_resumer');

        } elseif (isset($_POST['precedent2'])) {
            $_SESSION['inscription_3'] = $_POST['inscription_3'];
            $this->redirectToRoute('inscription2'); // si précédent retour page 2
        }
        $this->show('default/inscription3');
    }


    /*public function insertMembre() {
		if(isset($inscription)) {
			$manager = new MembreManager();
			$manager->insertMembre($inscription);
			$this->redirectToRoute('home');
		}
		$this->show('home/home');
	}*/
}