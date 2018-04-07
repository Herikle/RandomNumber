<?php 

require_once 'helpers/SessionHelper.php';
require_once 'Controller.php';

class LoginPage extends Controller
{

	public function signUpPage($plan)
	{
		Session::setSession('plan',str_replace('/', '', $plan));
		$this->redirect('/view/loginpage.php');
	}

}