<?php
   //-------------------requires---------------------------------------

   require_once 'controller/HomePageController.php';
   require_once 'controller/LoginPageController.php';
   require_once 'controller/UserController.php'; 
   require_once 'helpers/AuthHelper.php';

   //--------------------inits-----------------------------------

   $path = $_SERVER['REQUEST_URI'];
   $home = new HomePage();
   $login = new LoginPage();
   $user = new UserController();

   //-------------------routes---------------------------------------
   if(Auth::hasAuth())
   {
      echo 'TA AUTENTICADO'; //corrigir sessões
   }
   else
   {
      switch ($path) {
         case '/vip':
         case '/free':
         case '/special':
            $login->signUpPage($path);
            break;
         case '/signup':
            $user->signup();
         break;
         case '/login':
            $login->login();
         break;
         default:
            $home->index();
            break;
      }      

   }
?>
