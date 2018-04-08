<?php
   //-------------------requires---------------------------------------

   require_once 'controller/HomePageController.php';
   require_once 'controller/LoginPageController.php';
   require_once 'controller/UserController.php'; 
   require_once 'controller/AuthPagesController.php';
   require_once 'helpers/AuthHelper.php';
   require_once 'helpers/SessionHelper.php';

   //--------------------inits-----------------------------------
   $path = $_SERVER['REQUEST_URI'];
   $home = new HomePage();
   $login = new LoginPage();
   $user = new UserController();
   $auth = new AuthPages();
   //-------------------routes---------------------------------------
   if(Auth::hasAuth())
   {
      switch($path){
         case '/logout':
            $auth->logout();
         break;
         default:
            $auth->dashboard();
         break;
      }
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
