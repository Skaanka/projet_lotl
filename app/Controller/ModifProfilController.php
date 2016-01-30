<?php

namespace Controller;

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



class ModifProfilController extends Controller {
    
    
    public function modif_profil1() 
    {
        if(isset($_POST['suivant'])) {  
            
            $update_profil = $_POST['wuser'];
            
            if (!empty($_FILES['avatar']['tmp_name'])) { // si il y a une nouvelle image
                //envoi image + changement nom_image
                $uploads_dir = "C:/xampp/htdocs/projet_lotl/public/assets/img/uploads/";
                //debug($_FILES);die();
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $name = time() . "_" . $_FILES['avatar']['name'];
                $result = move_uploaded_file($tmp_name, "$uploads_dir$name");
                $update_profil['avatar'] = $name;
            }
            
            $_SESSION['updateUser'] = $update_profil;
            //debug($_SESSION['updateUser']);die();
            $this->redirectToRoute('modif_profil2'); // si ok envoie page 2

        }
        
        $this->show('modif_profil/modif_profil1'); // redirection si erreur
    }
    
    public function modif_profil2() 
    {
        if(isset($_POST['suivant2'])) {
            
            $_SESSION['diplome'] = $_POST['diplome'];
            $_SESSION['experience_pro'] = $_POST['experience_pro'];
            $_SESSION['competence'] = $_POST['competence'];
            $_SESSION['fil_actu'] = $_POST['fil_actu'];
            $_SESSION['portfolio'] = $_POST['portfolio'];
            
            //debug($_SESSION['portfolio']);die();
            $this->redirectToRoute('modif_profil3'); // si ok envoie page 2
            
        } elseif (isset($_POST['precedent'])) {
            $_SESSION['modif_profil2'] = $_POST['modif_profil2'];
            $this->redirectToRoute('modif_profil1'); // si précédent retour page 1
        }
        $this->show('modif_profil/modif_profil2'); // redirection si erreur
    }
    
    public function modif_profil3() 
    {
        if(isset($_POST['valider'])) {
            
            $_SESSION['reseaux_social'] = $_POST['reseaux_social'];
            $_SESSION['reseaux_pro'] = $_POST['reseaux_pro'];
            $_SESSION['reseaux_divertissement'] = $_POST['reseaux_divertissement'];
            //debug($_SESSION['updateUser']);debug($_SESSION['portfolio']);debug($_SESSION['reseaux_pro']);die();
            
            //recuperation de l'id du profil
            $manager = new UserManager();
            $mail = $_SESSION['updateUser']['mail']; // recuperation du mail dans une variable
            $membre = $manager->findMail($mail);  //recuperation du membre dans la table wusers via le mail
            $id = $membre['id'];
            
            //debug($membre);debug($id);die();
            
            // update formulaire 1
            $manager->update($_SESSION['updateUser'], $id); //enregistrement membre dans BDD
            
        
            // update page formulaire 2
			//debug($_SESSION['diplome']);die();
            $manager = new DiplomeManager(); //selection de la table Diplome
            $manager->update($_SESSION['diplome'], $id);
            
            $manager = new Experience_proManager(); //selection de la table experience_pros
            $manager->update($_SESSION['experience_pro'], $id);
            
            $manager = new CompetenceManager(); //selection de la table competences
            $manager->update($_SESSION['competence'], $id);
            
            $manager = new Fil_actuManager(); //selection de la table fil_actus
            $manager->update($_SESSION['fil_actu'], $id);
            
            $manager = new PortfolioManager(); //selection de la table portfolios
            $manager->update($_SESSION['portfolio'], $id);
            
            // update page formulaire 3
            $manager = new Reseaux_socialManager(); //selection de la table reseaux_socials
            $manager->update($_SESSION['reseaux_social'], $id);
            
            $manager = new Reseaux_proManager(); //selection de la table reseaux_pros
            $manager->update($_SESSION['reseaux_pro'], $id);
            
            $manager = new Reseaux_divertissementManager(); //selection de la table reseaux_divertissements
            $manager->update($_SESSION['reseaux_divertissement'], $id);
            
            $this->redirectToRoute('accueil');
            
        } elseif (isset($_POST['precedent2'])) {
            $_SESSION['inscription_3'] = $_POST['modif_profil3'];
            $this->redirectToRoute('modif_profil2'); // si précédent retour page 2
        }
        $this->show('modif_profil/modif_profil3');
    
	}
}