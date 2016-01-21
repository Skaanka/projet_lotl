<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\Manager;
use \W\Manager\UserManager;
use \Manager\MembreManager;
use \Manager\DiplomeManager;
use \Manager\Experience_proManager;

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

            // ajout d'un $key => $value (ex :role => membre)
            $_SESSION['wuser']['role'] = 'membre';

            $manager = new UserManager();
            
            // insert formulaire 1
            $manager->insert($_SESSION['wuser']); //enregistrement membre dans BDD
            $mail = $_SESSION['wuser']['mail']; // recuperation du mail dans une variable
            
            //suite insert formulaire 1
            $membre = $manager->findMail($mail);  //recuperation du membre dans la table wusers via le mail
            $_SESSION['membre']['id_membre'] = $membre['id']; // ajout d'une $key id_membre dans la SESSION['membre']
            
            $manager = new MembreManager(); //selection de la table Membre
            $manager->insert($_SESSION['membre']); //insertion dans la table membre de la session['membre']
            
             
             // insert page formulaire 2
             
            $_SESSION['diplome']['id_membre'] = $membre['id']; // ajout d'une $key id_membre dans la SESSION['diplome']
            $_SESSION['diplome2']['id_membre'] = $membre['id'];
            $_SESSION['diplome3']['id_membre'] = $membre['id'];
            $_SESSION['diplome4']['id_membre'] = $membre['id'];
            
           
            $manager = new DiplomeManager(); //selection de la table Diplome
            $manager->insert($_SESSION['diplome']);
            $manager->insert($_SESSION['diplome2']);
            $manager->insert($_SESSION['diplome3']);
            $manager->insert($_SESSION['diplome4']);
            
            
            $_SESSION['experience_pro']['id_membre'] = $membre['id']; // ajout d'une $key id_membre dans la SESSION['experience_pro']
            $_SESSION['experience_pro2']['id_membre'] = $membre['id']; 
            $_SESSION['experience_pro3']['id_membre'] = $membre['id']; 
            $_SESSION['experience_pro4']['id_membre'] = $membre['id']; 
            $_SESSION['experience_pro5']['id_membre'] = $membre['id']; 
            $_SESSION['experience_pro6']['id_membre'] = $membre['id']; 
            
            
            $manager = new Experience_proManager(); //selection de la table Diplome
            $manager->insert($_SESSION['experience_pro']);
            $manager->insert($_SESSION['experience_pro2']);
            $manager->insert($_SESSION['experience_pro3']);
            $manager->insert($_SESSION['experience_pro4']);
            $manager->insert($_SESSION['experience_pro5']);
            $manager->insert($_SESSION['experience_pro6']);
            
            /*
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
            //$this->redirectToRoute('inscription2'); // si précédent retour page 2
        }
        $this->show('inscription/inscription3');
    }


}