<?php

require_once 'controller/LoginPageController.php';
require_once 'Controller.php';

class HomePage extends Controller{

	public function index(){				
		$this->redirect('/view/homepage.php');
	}
}