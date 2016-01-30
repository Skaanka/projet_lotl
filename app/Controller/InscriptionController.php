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
    
    
   
   public function inscription_1() 
    {
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
            $_POST['wuser']['avatar'] = $name;            
            
            $_SESSION['wuser'] = $_POST['wuser'];
            //hashage du mdp
            $_SESSION['wuser']['mot_de_passe'] = password_hash($_SESSION['wuser']['mot_de_passe'], PASSWORD_DEFAULT);
				
				//debug($_SESSION['wuser']);die();
            $this->redirectToRoute('inscription2'); // si ok envoie page 2
			}
            

        }
        
        $this->show('inscription/inscription1'); // redirection si erreur
    }
    
    public function inscription_2() 
    {
        if(isset($_POST['suivant2'])) {
            $_SESSION['diplome'] = $_POST['diplome'];
            $_SESSION['experience_pro'] = $_POST['experience_pro'];
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
            $_SESSION['wuser']['validation_inscription'] = 'false';
            
            $manager = new UserManager();
            
            // insert formulaire 1
            $manager->insert($_SESSION['wuser']); //enregistrement membre dans BDD
            $mail = $_SESSION['wuser']['mail']; // recuperation du mail dans une variable
            //suite insert formulaire 1
            $manager = new GeneralManager();
            $membre = $manager->findMail($mail);  //recuperation du membre dans la table wusers via le mail
            
            // insert page formulaire 2
            $_SESSION['diplome']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['diplome']
            $manager = new DiplomeManager(); //selection de la table Diplome
            $manager->insert($_SESSION['diplome']);
            
            $_SESSION['experience_pro']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['experience_pro']
            $manager = new Experience_proManager(); //selection de la table experience_pros
            $manager->insert($_SESSION['experience_pro']);
            
            $_SESSION['competence']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['competence']
            $manager = new CompetenceManager(); //selection de la table competences
            $manager->insert($_SESSION['competence']);
            
            $_SESSION['fil_actu']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['fil_actu']
            $manager = new Fil_actuManager(); //selection de la table fil_actus
            $manager->insert($_SESSION['fil_actu']);
            
            $_SESSION['portfolio']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['portfolio']
            $manager = new PortfolioManager(); //selection de la table portfolios
            $manager->insert($_SESSION['portfolio']);
            
            // insert page formulaire 3
            $_SESSION['reseaux_social']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['reseaux_social']
            $manager = new Reseaux_socialManager(); //selection de la table reseaux_socials
            $manager->insert($_SESSION['reseaux_social']);
            
            $_SESSION['reseaux_pro']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['reseaux_pro']
            $manager = new Reseaux_proManager(); //selection de la table reseaux_pros
            $manager->insert($_SESSION['reseaux_pro']);
            
            $_SESSION['reseaux_divertissement']['id_wuser'] = $membre['id']; // ajout d'une $key id_wuser dans la SESSION['reseaux_divertissement']
            $manager = new Reseaux_divertissementManager(); //selection de la table reseaux_divertissements
            $manager->insert($_SESSION['reseaux_divertissement']);
            
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
    
}