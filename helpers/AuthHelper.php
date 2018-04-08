<?php
require_once 'model/UserModel.php';
require_once 'SessionHelper.php';

class Auth
{
	static function autenticate(User $user)
	{
		Session::setSession('user', $user->id);
	}

	static function hasAuth()
	{
		if(Session::getSession('user',FALSE)!=FALSE){
			return TRUE;
		}
		else 
			return FALSE;
	}

	static function logoff()
	{
			
	}
}


?>