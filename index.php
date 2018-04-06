<?php
   //-------------------requires---------------------------------------

   require_once 'controller/HomePageController.php';
   require_once 'controller/LoginPageController.php';

   //--------------------inits-----------------------------------

   $path = $_SERVER['REQUEST_URI'];
   $home = new HomePage();
   $login = new LoginPage();

   //-------------------routes---------------------------------------

   if($path=='/free' || $path=='/vip' || $path=='/special')
		$login->signUp($path);
	else
		$home->index();

?>
