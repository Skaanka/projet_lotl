<?php

namespace Controller;

require __DIR__ . '/../Helper/Helper.php';
use Helper\Helper;
use 

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\GeneralManager;
use \Manager\TokenManager;



class DefaultController extends Controller {

	public function home() {
		$this->show('home/home');
	}

    public function accueil() {
		$this->show('accueil/accueil');
	}
    
    public function profil() {
		$this->show('default/profil');
	}
    
    public function consultation() {
		$this->show('default/consultation');
	}
    
    public function validation() {
		$this->show('home/validation');
	}

    public function nouveau_mdp() {
		$this->show('oubli_mdp/oubli_mdp');
	}
    
    public function login() { // connexion au site
		if(isset($_POST['connexion'])) {
			$auth = new AuthentificationManager();
			$userManager = new UserManager();
            // debug($userManager); die; // vérification 
			if($auth->isValidLoginInfo($_POST['wuser']['mail'], $_POST['wuser']['mot_de_passe'])) {
				$user = $userManager->getUserByUsernameOrEmail($_POST['wuser']['mail']);
				$auth->logUserIn($user);
                //debug($user);die(); // vérification 
				$this->redirectToRoute('accueil');
			}
		}
		$this->show('home/home');
	}
    
    public function logout() { // déconnexion du site
        
		$auth = new AuthentificationManager();
		$auth->logUserOut();
		$this->redirectToRoute('home');
	}
    
    public function sendgrid() { // l'envoi de mail
    
        $sendgrid = new SendGrid("");
        $mail    = new SendGrid\Email();

        $mail->addTo("test@sendgrid.com")
        ->setFrom("saurondumordorlouviers@gmail.com")
        ->setSubject("Demande d'inscription validée !!!")
        ->setHtml("and easy to do anywhere, even with PHP");
        
        Helper::mail("saurondumordorlouviers@gmail.com", "Une demande d'inscritption à été effectué sur LOTL", "Veuillez valider ou non l'inscritpion."); // l'envoi de mail vers la BAL de l'admin pour toute nouvelle demande d'inscription sur le site

        $sendgrid->send($mail);
    }
    
    public function mdp_oublie() {
        
        if(isset($_POST["envoyer"])) {
	
            $manager = new TokenManager();
            $result = $manager->findMail($_POST['oublie']['mail']); //recuperation de l'id et du mail de l'utilisateur
            //debug($result);die();
	           if( $result ) {
        
                    $id = $result["id"];
                    $token = md5(uniqid(rand(), true));
                    $tableautoken = array('token' => $token, 'id_wuser' => $id );
		            //debug($tableautoken);debug($token);die;
                    //$manager = new TokenManager();
                    $manager->insert($tableautoken);


                    // envoi email
		            $email = new SendGrid\Email();
        
                    $email
			          ->addTo($result["mail"])
   			          ->setFrom('saurondumordorlouviers@gmail.com')
    		          ->setSubject('Réinitialisation de votre mot de passe')
    		          ->setText('Redéfinir votre mot de passe : http://projet_lotl/mot_de_passe_oublie.php?id=' . $id . "&token=" . $token)
    		          ->setHtml('<a href="http://http://projet_lotl/mot_de_passe_oublie.php?id=' . $id . "&token=" . $token . '">Redéfinir votre mot de passe</a>');
                        Helper::mail($result['mail'], "Demande de nouveau mto de passe", "rzhgafiuhgrf");
                        $sendgrid->send($email);
                   
	           }
        }
        
	// création d'une page mot_de_passe_oublie.php
	// on vérifie que les id et token sont dans la base de données
	// si oui on propose à l'utilisateur un formulaire pour ressaisir son passsword (+ confirmation du password)

    }
    
    
//    public function new_mdp() {
//        
//        if(isset($_POST['envoyer'])) { 
//            //debug($_POST); die();
//            $new_mdp = password_hash($_POST['wuser']['mot_de_passe'], PASSWORD_DEFAULT);
//            $manager = new userManager;
//            
//            $manager->update()
//            $this->redirectToRoute('home'); // renvoi à la page home du site
//    }
//        
//    $this->redirectToRoute('new_mdp');
//    }
    
    
}
    