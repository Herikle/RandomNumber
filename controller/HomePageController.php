<?php
	require_once 'controller/LoginPageController.php';
	class HomePage{

		public function index(){				
			$this->redirect('/view/homepage.php');
		}

		private function redirect($location){
			header('Location: '.$location);
		}
	}