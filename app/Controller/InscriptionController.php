<?php

namespace Controller;

use \W\Controller\Controller;

class InscriptionController extends Controller
{

    
    public function inscription_1() 
	{
		if(isset($_POST['suivant'])) {
			$_SESSION['inscription_1'] = $_POST['inscription_1'];
            //debug();die()
			$this->redirectToRoute('inscription2'); // si ok envoie page 2
		}
        
		$this->show('default/inscription1'); // redirection si erreur
	}
    
    public function inscription_2() 
	{
		if(isset($_POST['suivant2'])) {
			$_SESSION['inscription_2'] = $_POST['inscription_2'];
			$this->redirectToRoute('inscription3'); // si ok envoie page 2
		} elseif (isset($_POST['precedent'])) {
            $_SESSION['inscription_2'] = $_POST['inscription_2'];
			$this->redirectToRoute('inscription1'); // si précédent retour page 1
        }
        
		$this->show('default/inscription2'); // redirection si erreur
	}
    
    public function inscription_3() 
	{
		if(isset($_POST['valider'])) {
			$_SESSION['inscription_3'] = $_POST['inscription_3'];
            $inscription = array_merge($_SESSION['inscription_1'], $_SESSION['inscription_2'], $_SESSION['inscription_3']); // session 1 + 2 + 3
            $manager = new UserManager();
			$manager->insert($inscription);
			$this->redirectToRoute('inscription_resumer');
		} elseif (isset($_POST['precedent2'])) {
            $_SESSION['inscription_3'] = $_POST['inscription_3'];
			$this->redirectToRoute('inscription2'); // si précédent retour page 2
        }
		$this->show('default/inscription3');
	}
  
}