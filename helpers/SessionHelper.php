<?php

	class Session{
		static function setSession($key,$value)
		{
			session_start();
			$_SESSION[$key] = $value;
		}

		static function getSession($key,$destroy)
		{
			session_start();
			$value = isset($_SESSION[$key])? $_SESSION[$key]:'free';
			if($destroy)
				session_destroy();
			return $value;
		}

	}