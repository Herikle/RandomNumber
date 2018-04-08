<?php
require_once 'model/database.php';

	class Migrate extends Database
	{

	//-------------------------TABLE-----------------------------------

		private $user="CREATE TABLE user(
			id INT NOT NULL AUTO_INCREMENT,
			first_name varchar(32) NOT NULL,
			last_name varchar(32) NOT NULL,
			email varchar(64) NOT NULL UNIQUE,
			password varchar(32) NOT NULL,
			plan varchar(16) NOT NULL,
			PRIMARY KEY(id))
			";

	//---------------------------TABLE---------------------------------


		public function createTable($name)
		{
			$this->init();
			if(!($this->exist($name)))
			{
				echo("Tabela $name criada com sucesso.\n");
				$this->query($this->$name);
			}
			$this->close();
		}
	}

$migrate = new Migrate();

$migrate->createTable('user');

?>