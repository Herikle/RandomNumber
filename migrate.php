<?php
require_once 'model/database.php';

	class Migrate extends Database
	{

	//-------------------------TABLE-----------------------------------

		private $users = "CREATE TABLE users(
			id INT NOT NULL AUTO_INCREMENT,
			first_name varchar(32) NOT NULL,
			last_name varchar(32) NOT NULL,
			email varchar(64) NOT NULL UNIQUE,
			password varchar(128) NOT NULL,
			plan_id INT NOT NULL,
			PRIMARY KEY(id),
			FOREIGN KEY (plan_id) REFERENCES plans(id))
			";

		private $plans="CREATE TABLE plans(
			id INT NOT NULL AUTO_INCREMENT,
			descr varchar(32) NOT NULL,
			PRIMARY KEY(id))";

	//---------------------------TABLE---------------------------------


		public function createTable($name)
		{
			$this->init();
			if(!($this->exist($name)))
			{
				$this->query($this->$name);
				echo("Tabela $name criada com sucesso.\n");
			}
			$this->close();
		}
	}
//----------------------------------------------------------------------------
$migrate = new Migrate();

$migrate->createTable('plans');
$migrate->createTable('users');

//----------------------------------CREATES------------------------------------

$plans = array("free","vip","special");
foreach ($plans as $plan) {
	$migrate->queryOnMigrate("INSERT INTO plans (descr) VALUES ('$plan') ");
}


?>