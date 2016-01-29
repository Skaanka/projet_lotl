<?php

namespace Controller;

require __DIR__ . '/../Helper/Helper.php';
use Helper\Helper;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\GeneralManager;
use \W\Security\AuthentificationManager;
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
            $UserManagerSuite = new GeneralManager();

            //debug($userManager); die; // vérification 
            if($auth->isValidLoginInfo($_POST['wuser']['mail'], $_POST['wuser']['mot_de_passe'])) {
                //selection table user
                $user = $userManager->getUserByUsernameOrEmail($_POST['wuser']['mail']);
                $auth->logUserIn($user);

                //recuperation de l'id de l'utilisateur connecté et jointure avec les autres tables.
                $id_user = $user['id'];
                $user2 = $UserManagerSuite->findAllLogUser($id_user);
                $_SESSION['user']['infos'] = $user2; // ajout de $user2 dans $user

                //debug($_SESSION['user']);die(); // vérification 
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
                //$manager = new TokenManager();
                $manager->insert($tableautoken);

                // envoi email
                $lien = $this->generateUrl('nouveau', ['token' => $token, 'id' => $id]);
                Helper::mail($result['mail'], "Demande de nouveau mot de passe", '<a href="http://projet_lotl' . $lien . '">Lien</a>');

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
            $user_manager->update(['mot_de_passe' => $new_mdp], $id);
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



