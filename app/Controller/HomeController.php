<?php

namespace Controller;

require __DIR__ . '/../Helper/Helper.php';
use Helper\Helper;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\GeneralManager;
use \W\Security\AuthentificationManager;
use \Manager\TokenManager;

class HomeController extends Controller {

	public function home() {
        $this->show('home/home');
    }
	
    public function validation() {
        $this->show('home/validation');
    }

    public function nouveau_mdp() {
        $this->show('oubli_mdp/oubli_mdp');
    }
    

    public function oubli() {

        if(isset($_POST["envoyer"])) {

            $manager = new TokenManager();
            $result = $manager->findMail($_POST['oublie']['mail']); //recuperation de l'id et du mail de l'utilisateur
            //debug($result);die();
            if( $result ) {

                $id = $result["id"];
                $token = md5(uniqid(rand(), true));
                $tableautoken = array('token' => $token, 'id_wuser' => $id );
                //debug($tableautoken);debug($token);die;
                $manager->insert($tableautoken, $stripTags = true);

                // envoi email
                $lien = $this->generateUrl('nouveau', ['token' => $token, 'id' => $id]);
                Helper::mail($result['mail'], "Demande de nouveau mot de passe", '<a href="projet_lotl' . $lien . '">Lien</a>');

            }
        }

        // création d'une page mot_de_passe_oublie.php
        // on vérifie que les id et token sont dans la base de données
        // si oui on propose à l'utilisateur un formulaire pour ressaisir son passsword (+ confirmation du password)
        $this->redirectToRoute('home');

    }
    
    public function nouveau($token, $id) {

        // POST : Si oui, on affiche le formulaire sinon on retrourne sur home        
        if(isset($_POST['envoyer'])) { 
            //debug($_POST); die();
            $new_mdp = password_hash($_POST['wuser']['mot_de_passe'], PASSWORD_DEFAULT);
            $user_manager = new userManager;
            $user_manager->update(['mot_de_passe' => $new_mdp], $id, $stripTags = true);
            $this->redirectToRoute('home'); // renvoi à la page home du site
        }

        // GET : Vérifier que le $token existe pour cet $id
        $token_manager = new TokenManager();
        $trouve = $token_manager->findToken($token);

        if($trouve) {
            $this->show('token/nouveau');
        } else {
            $this->redirectToRoute('home');
        }        
    }
    
}