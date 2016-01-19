<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller {

    
    public function accueil() {
		$this->show('default/accueil');
	}
    
    public function inscription() {
		$this->show('default/inscription');
	}
    
    public function profil() {
		$this->show('default/profil');
	}
    
    public function consultation() {
		$this->show('default/consultation');
	}
    
    public function filtre() {
		$this->show('default/filtre');
	}

}