<?php

namespace Controller;

use \W\Controller\Controller;

class HomeController extends Controller {

	public function home() {
		$this->show('home/home');
	}
    
}