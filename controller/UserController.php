<?php
require_once 'Controller.php';
require_once 'model/UserModel.php';
class UserController extends Controller{

	public function signup()
	{
		$test = $this->validPassword();
		if($test===TRUE){
			$user = new User();
			$user->create($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password'],$_POST['plan']);
			if($user->hasErrors()){
				echo var_dump($user->Errors());
			}else{
				$user->save();
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
