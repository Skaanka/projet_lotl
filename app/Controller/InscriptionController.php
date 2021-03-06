<?php

namespace Controller;

require __DIR__ . '/../Helper/Helper.php';
use Helper\Helper;
//Manager Default
use \W\Controller\Controller;
use \W\Manager\Manager;
use \W\Manager\UserManager;
use W\Security\AuthentificationManager;
//Manager Projet
use \Manager\CompetenceManager;
use \Manager\DiplomeManager;
use \Manager\Experience_proManager;
use \Manager\Fil_actuManager;
use \Manager\PortfolioManager;
use \Manager\Reseaux_divertissementManager;
use \Manager\Reseaux_proManager;
use \Manager\Reseaux_socialManager;
use \Manager\GeneralManager;



class InscriptionController extends Controller {



    public function inscription_1() {
        
        if (isset($_SESSION['user'])) {
            $this->redirectToRoute('accueil'); // si ok envoie page 2    
        }
        
        if(isset($_POST['suivant'])) {  

            $mail = $_POST['wuser']['mail'];
            $user_manager = new userManager();
            $verif = $user_manager->emailExists($mail);

            if ($verif){
                debug("Cet email est déjà utilisé !");
                $this->show('inscription/inscription1'); // redirection si erreur
            } else {
                //envoi image + changement nom_image
                $uploads_dir = "C:/xampp/htdocs/projet_lotl/public/assets/img/uploads/";
                //debug($_FILES);die();
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $name = time() . "_" . $_FILES['avatar']['name'];
                $result = move_uploaded_file($tmp_name, "$uploads_dir$name");
                $_POST['wuserInsc']['avatar'] = $name;            

                $_SESSION['wuserInsc'] = $_POST['wuser'];
                //hashage du mdp
                $_SESSION['wuserInsc']['mot_de_passe'] = password_hash($_SESSION['wuserInsc']['mot_de_passe'], PASSWORD_DEFAULT);

                //debug($_SESSION['wuser']);die();
                $this->redirectToRoute('inscription2'); // si ok envoie page 2
            }


        }

        $this->show('inscription/inscription1'); // redirection si erreur
    }

    public function inscription_2() {
        
        if (isset($_SESSION['user'])) {
        
            $this->redirectToRoute('accueil'); // si ok envoie page 2    
        }
        
        if(isset($_POST['suivant2'])) {
            $_SESSION['diplomeInsc'] = $_POST['diplome'];
            $_SESSION['experience_proInsc'] = $_POST['experience_pro'];
            $_SESSION['competenceInsc'] = $_POST['competence'];
            
            $_SESSION['fil_actuInsc'] = $_POST['fil_actu'];
            $date = date("Y-m-d H:i:s");
            $_SESSION['fil_actuInsc']['date'] = $date;
            
            $_SESSION['portfolioInsc'] = $_POST['portfolio'];

            $this->redirectToRoute('inscription3'); // si ok envoie page 2
        } elseif (isset($_POST['precedent'])) {
            $_SESSION['inscription_2'] = $_POST['inscription_2'];
            $this->redirectToRoute('inscription1'); // si précédent retour page 1
        }
        $this->show('inscription/inscription2'); // redirection si erreur
    }

    public function inscription_3() {
        
        if (isset($_SESSION['user'])) {
        
            $this->redirectToRoute('accueil'); // si ok envoie page 2    
        }
        
        if(isset($_POST['valider'])) {
            $_SESSION['reseaux_socialInsc'] = $_POST['reseaux_social'];
            $_SESSION['reseaux_proInsc'] = $_POST['reseaux_pro'];
            $_SESSION['reseaux_divertissementInsc'] = $_POST['reseaux_divertissement'];
            
            //nettoyage des espace en debut et fin de chaine de caractére            
            $_SESSION['wuserInsc'] = array_map('trim', $_SESSION['wuserInsc']);
            $_SESSION['diplomeInsc'] = array_map('trim', $_SESSION['diplomeInsc']);
            $_SESSION['experience_proInsc'] = array_map('trim', $_SESSION['experience_proInsc']);
            $_SESSION['fil_actuInsc'] = array_map('trim', $_SESSION['fil_actuInsc']);
            $_SESSION['portfolioInsc'] = array_map('trim', $_SESSION['portfolioInsc']);
            $_SESSION['reseaux_socialInsc'] = array_map('trim', $_SESSION['reseaux_socialInsc']);
            $_SESSION['reseaux_proInsc'] = array_map('trim', $_SESSION['reseaux_proInsc']);
            $_SESSION['reseaux_divertissementInsc'] = array_map('trim', $_SESSION['reseaux_divertissementInsc']);

            // ajout d'un $key => $value (ex :role => membre)
            $_SESSION['wuserInsc']['role'] = 'membre';
            $_SESSION['wuserInsc']['validation_inscription'] = 'false';

            $manager = new UserManager();

            // insert formulaire 1
            $manager->insert($_SESSION['wuserInsc'], $stripTags = true); //enregistrement membre dans BDD
            $mail = $_SESSION['wuserInsc']['mail']; // recuperation du mail dans une variable
            //suite insert formulaire 1
            $manager = new GeneralManager();
            $membre = $manager->findMail($mail);  //recuperation du membre dans la table wusers via le mail
            $id = $membre['id'];
            // insert page formulaire 2
            $_SESSION['diplomeInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['diplome']
            $manager = new DiplomeManager(); //selection de la table Diplome
            $manager->insert($_SESSION['diplomeInsc'], $stripTags = true);

            $_SESSION['experience_proInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['experience_pro']
            $manager = new Experience_proManager(); //selection de la table experience_pros
            $manager->insert($_SESSION['experience_proInsc'], $stripTags = true);

            $_SESSION['competenceInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['competence']
            $manager = new CompetenceManager(); //selection de la table competences
            $manager->insert($_SESSION['competenceInsc'], $stripTags = true);

            $_SESSION['fil_actuInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['fil_actu']
            $manager = new Fil_actuManager(); //selection de la table fil_actus
            $manager->insert($_SESSION['fil_actuInsc'], $stripTags = true);

            $_SESSION['portfolioInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['portfolio']
            $manager = new PortfolioManager(); //selection de la table portfolios
            $manager->insert($_SESSION['portfolioInsc'], $stripTags = true);

            // insert page formulaire 3
            $_SESSION['reseaux_socialInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['reseaux_social']
            $manager = new Reseaux_socialManager(); //selection de la table reseaux_socials
            $manager->insert($_SESSION['reseaux_socialInsc'], $stripTags = true);

            $_SESSION['reseaux_proInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['reseaux_pro']
            $manager = new Reseaux_proManager(); //selection de la table reseaux_pros
            $manager->insert($_SESSION['reseaux_proInsc'], $stripTags = true);

            $_SESSION['reseaux_divertissementInsc']['id_wuser'] = $id; // ajout d'une $key id_wuser dans la SESSION['reseaux_divertissement']
            $manager = new Reseaux_divertissementManager(); //selection de la table reseaux_divertissements
            $manager->insert($_SESSION['reseaux_divertissementInsc'], $stripTags = true);

            Helper::mail("saurondumordorlouviers@gmail.com", "Une demande d'inscritption à été effectué sur LOTL", "Veuillez valider ou non l'inscritpion."); // l'envoi de mail vers la BAL de l'admin pour toute nouvelle demande d'inscription sur le site

            //destruction des SESSION INSCRIPTION
            $manager = new GeneralManager();
            $manager->logInscrOut();

            $this->redirectToRoute('validation');

        } elseif (isset($_POST['precedent2'])) {
            $_SESSION['inscription_3'] = $_POST['inscription_3'];
            $this->redirectToRoute('inscription2'); // si précédent retour page 2
        }
        $this->show('inscription/inscription3');
    }
    
    public function validation() {
        
        if (isset($_SESSION['user'])) {
            $this->redirectToRoute('accueil'); // si ok envoie page 2    
        }
        
        $this->show('home/validation');
    }
    
}