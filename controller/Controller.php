<?php

class Controller{

	protected function redirect($location)
	{
		header('Location: '.$location);
	}
}

?>