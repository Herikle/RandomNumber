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

	public function User($first_name, $last_name,$email,$password,$plan)
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
		$messages = array(
			'first_name' => empty($this->first_name)? "First name can't be null" : 'valid'  ,
			'last_name' => empty($this->last_name)? "Last name can't be null" : 'valid' ,
			'email' => empty($this->email)? "Email can't be null" : 'valid',
			'plan' => empty($this->plan)? "Plan can't be null" : 'valid',	
		);
		foreach($messages as $key => $value)
		{
			if($value != 'valid')
			{
				$this->errors[$key] = $value;
			}
		}
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