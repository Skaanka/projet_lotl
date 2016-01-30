<?php

namespace Controller;

//Manager Default
use \W\Controller\Controller;
use \W\Manager\Manager;
use \W\Manager\UserManager;

//Manager Projet
use \Manager\GeneralManager;
use \Manager\CompetenceManager;
use \Manager\DiplomeManager;
use \Manager\Experience_proManager;
use \Manager\Fil_actuManager;
use \Manager\PortfolioManager;
use \Manager\Reseaux_divertissementManager;
use \Manager\Reseaux_proManager;
use \Manager\Reseaux_socialManager;

class AdministrationController extends Controller {

    public function administration() {
        //$user = $this->getUser();
        $manager = new GeneralManager(); // execute la function qui recupere TOUTES les tables de la bdd
        $membres = $manager->findUserAll();
        $this->show('administration/administration', ['membres' => $membres]);
    }


    public function validationProfil($id) {
        $this->allowTo('admin'); // uniquement un admin

        $user_manager = new UserManager();
        $user = $user_manager->find($id); // recuperation du profil a mettre a jour

        $user['validation_inscription'] = "true"; // passe le parametre du profil false vers true
        $user_manager->update($user, $id); // update du profil

        $mail = $user['mail'];
        //Helper::mail($mail, "Votre inscription a été effectué sur LOTL", "Connecter vous maintenant -> URL SITE WEB");

        $this->redirectToRoute('administration'); // redirection vers l'accueil sur le modal admin
    }

    public function deleteProfil($id) {
        $this->allowTo('admin');

        $user_manager = new UserManager();
        $user = $user_manager->find($id); // recuperation du profil a supprimer
        $id_wuser = $user['id'];
        //debug($user);debug($id_wuser);die();
        $manager = new CompetenceManager();
        $manager->delete($id_wuser);
        $manager = new DiplomeManager();
        $manager->delete($id_wuser);
        $manager = new Experience_proManager();
        $manager->delete($id_wuser);
        $manager = new Fil_actuManager();
        $manager->delete($id_wuser);
        $manager = new PortfolioManager();
        $manager->delete($id_wuser);
        $manager = new Reseaux_socialManager();
        $manager->delete($id_wuser);
        $manager = new Reseaux_proManager();
        $manager->delete($id_wuser);
        $manager = new Reseaux_divertissementManager();
        $manager->delete($id_wuser);

        $manager = new UserManager();
        $manager->delete($id);

        //reflexion sur l'envoi de mail lors d'une validation d'un mail
        //Helper::mail($mail, "Votre inscription n'a  pas été validée sur LOTL", "Vous ne remplissez pas les conditions pour vous inscrire sur LOTL, vous pouvez toujours suivre notre communauté sur www.jesuistondev.fr");

        $this->redirectToRoute('administration');
    }
    
    

}