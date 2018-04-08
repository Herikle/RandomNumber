<?php
require_once 'model/UserModel.php';
require_once 'SessionHelper.php';

class Auth
{
	static function autenticate(User $user)
	{
		Session::setSession('user', $user->userToArray());
		setcookie('user',$user->id);
	}

	static function hasAuth()
	{
		if(Session::getSession('user',FALSE)!=FALSE){
			return TRUE;
		}
		else
		{
			if(isset($_COOKIE['user']))
			{
				$user = new User();
				$user->getUserBy('id',$_COOKIE['user']);
				Session::setSession('user',$user->userToArray());
				return TRUE;
			}
			return FALSE;
		}
	}

	static function getAuthUser()
	{
		return Session::getSession('user',FALSE);
	}

	static function logout()
	{
		setcookie('user',$_COOKIE['user'],time()-1);
		Session::destroySession('user');
	}
}


?>