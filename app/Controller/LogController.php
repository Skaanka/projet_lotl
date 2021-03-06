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

        if (isset($_SESSION['user'])) {
            $this->redirectToRoute('accueil'); // si ok envoie page 2    
        }
        
        if(isset($_POST['connexion'])) {
            $auth = new AuthentificationManager();
            $userManager = new UserManager();
            $UserManagerSuite = new GeneralManager();

            //debug($userManager); die; // vérification 
            if($auth->isValidLoginInfo($_POST['wuser']['mail'], $_POST['wuser']['mot_de_passe'])) {
                //selection table user
                $user_part1 = $userManager->getUserByUsernameOrEmail($_POST['wuser']['mail']);

                //recuperation de l'id de l'utilisateur connecté et jointure avec les autres tables.
                $id_user = $user_part1['id'];

                if ($user_part1['validation_inscription'] === 'true') {
                    $user_part2 = $UserManagerSuite->findAllLogUser($id_user);
                    $user = array_merge($user_part1, $user_part2); // ajout de $user2 dans $user

                    $auth->logUserIn($user);
                    //debug($_SESSION['user']);die(); // vérification
                    $this->redirectToRoute('accueil');
                } else {
                    $this->show('home/home');
                }
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