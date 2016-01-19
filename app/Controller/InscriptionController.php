<?php

namespace Controller;

use \W\Controller\Controller;

class InscriptionController extends Controller
{

    
    public function inscription_1() 
	{
		if(isset($_POST['create'])) {
			$_POST['myform']['role'] = 'user';
			$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
			$manager = new UserManager();
			$manager->insert($_POST['myform']);
			$this->redirectToRoute('inscription_2');
		}
		$this->show('default/inscription_1');
	}
    
    public function inscription_2() 
	{
		if(isset($_POST['create'])) {
			$_POST['myform']['role'] = 'user';
			$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
			$manager = new UserManager();
			$manager->insert($_POST['myform']);
			$this->redirectToRoute('home');
		}
		$this->show('default/inscription_2');
	}
    
    public function inscription_3() 
	{
		if(isset($_POST['create'])) {
			$_POST['myform']['role'] = 'user';
			$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
			$manager = new UserManager();
			$manager->insert($_POST['myform']);
			$this->redirectToRoute('home');
		}
		$this->show('default/inscription_3');
	}
  
}