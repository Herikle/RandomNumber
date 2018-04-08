<?php
require_once 'helpers/AuthHelper.php';
require_once 'model/UserModel.php';

class AuthPages extends Controller{

	public function Dashboard()
	{
		$user = Auth::getAuthUser();
		echo var_dump($user);
		$this->redirect('view/dashboard.php');	

	}

	public function logout()
	{
		Auth::logout();
		$this->redirect('/');
	}


}










?>