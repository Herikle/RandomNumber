<?php
require_once 'database.php';
class User extends Database 
{
	private $first_name;
	private $last_name;
	private $email;
	private $password;
	private $plan;
	private $errors = array();

	public function __construct($first_name, $last_name,$email,$password,$plan)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->password = $password;
		$this->plan = $plan;

		$this->valid();
	}

	private function valid()
	{
		if(empty($this->first_name)) $this->errors['first_name'] = "First name can't be null";
		if(empty($this->last_name)) $this->errors['last_name'] = "Last name can't be null";
		if(empty($this->email)) $this->errors['email'] = "Email can't be null";
		if(empty($this->plan)) $this->errors['plan'] = "Plan can't be null";
	}

	public function hasErrors()
	{
		return !empty($this->errors);
	}

	public function Errors()
	{
		return $this->errors;
	}

	public function save()
	{
		$this->init();
		$sql = "INSERT INTO user (first_name,last_name,email,password,plan) VALUES ('{$this->first_name}','{$this->last_name}','{$this->email}','{$this->password}','{$this->plan}')";
		$this->query($sql);
		$this->close();
	}
}

?>