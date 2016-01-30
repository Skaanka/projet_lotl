<?php

namespace Controller;

require __DIR__ . '/../Helper/Helper.php';
use Helper\Helper;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\GeneralManager;
use \W\Security\AuthentificationManager;
use \Manager\TokenManager;



class  LogController extends Controller {

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
                $_SESSION['user'] = array_merge($_SESSION['user'], $user2); // ajout de $user2 dans $user

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
    
}