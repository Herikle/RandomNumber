<?php
require_once 'Controller.php';
require_once 'model/UserModel.php';
class UserController extends Controller{

	public function signup()
	{
		if($this->validPassword()){
			$user = new User($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password'],$_POST['plan']);
			if($user->hasErrors()){
				echo var_dump($user->Errors());
			}else{
				$user->save();
			}
		}else
		{
			echo "Min 6 characteres password";
		}
	}

	private function validPassword()
	{	
		$password = $_POST['password'];
		$repeat_password = $_POST['repeat_password'];
		if(strlen($password)<6) return FALSE;
		if($password==$repeat_password) return TRUE;
	}

}
?>