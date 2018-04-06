<?php 
	require_once 'helpers/SessionHelper.php';
	class LoginPage{

		public function signUp($plan)
		{
			Session::setSession('plan',str_replace('/', '', $plan));
			$this->redirect('/view/loginpage.php');
		}

		private function redirect($location){
			header('Location: '.$location);
		}

	}