<?php
   //-------------------requires---------------------------------------

   require_once 'controller/HomePageController.php';
   require_once 'controller/LoginPageController.php';
   require_once 'controller/UserController.php'; 

   //--------------------inits-----------------------------------

   $path = $_SERVER['REQUEST_URI'];
   $home = new HomePage();
   $login = new LoginPage();
   $user = new UserController();

   //-------------------routes---------------------------------------

   switch ($path) {
      case '/vip':
      case '/free':
      case '/special':
         $login->signUpPage($path);
         break;
      case '/signup':
         $user->signup();
      break;
      default:
         $home->index();
         break;
   }
?>
