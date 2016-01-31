<?php

namespace Manager;

use W\Security\StringUtils;
use W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\GeneralManager;

class RafraichirManager extends AuthentificationManager
{

    public function refreshUserMulti() {
        $app = getApp();
        $userManager = new UserManager();
        $userManager->setTable( $app->getConfig('security_user_table') );
        $userFromSession = $this->getLoggedUser();
        if ($userFromSession){

            $user_part1 = $userManager->find($userFromSession[$app->getConfig('security_id_property')]); //se connecte a la table wusers

            $UserManagerSuite = new GeneralManager();
            $id_user = $user_part1['id'];
            $user_part2 = $UserManagerSuite->findAllLogUser($id_user);
            $userFromDb = array_merge($user_part1, $user_part2); // ajout de $user2 dans $user

            if ($userFromDb){
                $_SESSION["user"] = $userFromDb;
                return true;
            }
        }

        return false;
    }
}