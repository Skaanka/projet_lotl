<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\Manager;
use \W\Manager\UserManager;
use \Manager\MembreManager;

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

        $this->show('inscription/inscription1'); // redirection si erreur
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

        $this->show('inscription/inscription2'); // redirection si erreur
    }

    public function inscription_3() 
    {
        if(isset($_POST['valider'])) {
            $_SESSION['reseaux_social'] = $_POST['reseaux_social'];
            $_SESSION['reseaux_pro'] = $_POST['reseaux_pro'];
            $_SESSION['reseaux_divertissement'] = $_POST['reseaux_divertissement'];


            $_SESSION['wuser']['role'] = 'membre';
            //debug($inscription); die();
            $manager = new UserManager();
            debug($_SESSION['wuser']);
            // insert page formulaire 1
            $manager->insert($_SESSION['wuser']); //enregistrement membre dans BDD
               debug($manager); die();
            $mail = $_SESSION['wuser']['mail']; // recuperation du mail dans une variable

            $membre = $manager->find($mail);
            $membre['id'];
            // Ajouter $key = id_membre => $value = $membre['id']
            array_push($_SESSION['membre'], $_SESSION['membre']['id_membre'] = $membre['id']);
            var_dump($membre);
            debug($_SESSION['membre']); die();
            
            /*
            //suite insert formulaire 1
            $manager->insert($_SESSION['membre']);
            
            // insert page formulaire 2
            $manager->insert($_SESSION['diplome']);
            $manager->insert($_SESSION['diplome2']);
            $manager->insert($_SESSION['diplome3']);
            $manager->insert($_SESSION['diplome4']);
            
            $manager->insert($_SESSION['experience_pro']);
            $manager->insert($_SESSION['experience_pro2']);
            $manager->insert($_SESSION['experience_pro3']);
            $manager->insert($_SESSION['experience_pro4']);
            $manager->insert($_SESSION['experience_pro5']);
            $manager->insert($_SESSION['experience_pro6']);

            $manager->insert($_SESSION['competence']);
            
            $manager->insert($_SESSION['fil_actu']);
            
            $manager->insert($_SESSION['portfolio']);

            // insert page formulaire 3
            $manager->insert($_SESSION['reseaux_social']);
            
            $manager->insert($_SESSION['reseaux_pro']);
            
            $manager->insert($_SESSION['reseaux_divertissement']);
            */
            

            $this->redirectToRoute('validation');

        } elseif (isset($_POST['precedent2'])) {
            $_SESSION['inscription_3'] = $_POST['inscription_3'];
            $this->redirectToRoute('inscription2'); // si précédent retour page 2
        }
        $this->show('inscription/inscription3');
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