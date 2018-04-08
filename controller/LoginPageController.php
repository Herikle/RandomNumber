<?php 

require_once 'helpers/SessionHelper.php';
require_once 'helpers/AuthHelper.php';
require_once 'Controller.php';
require_once 'model/UserModel.php';
class LoginPage extends Controller
{

	public function signUpPage($plan)
	{
		Session::setSession('plan',str_replace('/', '', $plan));
		$this->redirect('/view/signuppage.php');
	}

	public function login()
	{
		$user = new User();
		$email = isset($_POST['email'])? $_POST['email']:null;
		if($email!=null)
			$user->getUserBy('email',$email);
		if($user->password==$_POST['password'])
		{
			Auth::autenticate($user);
		}else
		{
			echo "incorreto";
		}
	}

}