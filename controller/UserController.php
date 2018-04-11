<?php
require_once 'Controller.php';
require_once 'model/UserModel.php';
require_once 'helpers/AuthHelper.php';
class UserController extends Controller{

	public function signup()
	{
		$test = $this->validPassword();
		if($test===TRUE){
			$user = new User();
			switch ($_POST['plan']) {
				case 'free':
					$idplan = 1;
					break;
				case 'vip':
					$idplan = 2;
					break;
				case 'special':
					$idplan = 3;
					break;
				default:
					return false;
					break;
			}
			$user->create($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password'],$idplan);
			if($user->hasErrors()){
				echo var_dump($user->errors);
			}else{
				$user->save();
				Auth::autenticate($user);
				$this->redirect('/');
			}
		}else
		{
			echo $test . "<br>";
		}
	}

	private function validPassword()
	{	
		$password = $_POST['password'];
		$repeat_password = $_POST['repeat_password'];
		if(strlen($password)<6) return "Min 6 chacacters password";
		if($password==$repeat_password)
		{
			return TRUE;
		}
		else
		{	
			return "Passwords not match";
		}
	}

}
?>
