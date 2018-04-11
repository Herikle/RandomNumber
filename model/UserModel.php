<?php
require_once 'database.php';
class User extends Database 
{
	private $id;
	private $first_name;
	private $last_name;
	private $email;
	private $password;
	private $plan_id;
	private $errors = array();

	public function create($first_name, $last_name,$email,$password,$plan_id)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->password = $password;
		$this->plan_id = $plan_id;

		$this->valid();
	}

	private function valid()
	{
		if(empty($this->first_name)) $this->errors['first_name'] = "First name can't be null";
		if(empty($this->last_name)) $this->errors['last_name'] = "Last name can't be null";
		if(empty($this->email)) $this->errors['email'] = "Email can't be null";
		if(empty($this->plan_id)) $this->errors['plan'] = "Plan can't be null";
	}

	public function hasErrors()
	{
		return !empty($this->errors);
	}

	public function save()
	{
		$this->init();
		$pass = md5($this->password);
		$sql = "INSERT INTO users (first_name,last_name,email,password,plan_id) VALUES ('{$this->first_name}','{$this->last_name}','{$this->email}','{$pass}','{$this->plan_id}')";
		$this->query($sql);
		$this->close();
	}

	public function getUserBy($column,$value)
	{
		$this->init();
		$sql = "SELECT * FROM users WHERE $column = '$value'";
		$result = $this->select($sql);
		$this->close();
		if($result!=false)
		{
			$this->id = $result['id'];
			$this->first_name = $result['first_name'];
			$this->last_name = $result['last_name'];
			$this->email = $result['email'];
			$this->password = $result['password'];
			$this->plan = $result['plan_id'];	
		}
	}

	public function userToArray()
	{
		$array = array(
			'id' => $this->id,
			'first_name' => $this->first_name,
			'last_name' => $this->last_name,
			'email' => $this->email,
			'plan_id' => $this->plan_id,
			);
		return $array;
	}

	public function __get($name) 
	{
    	return $this->$name;
  	}
}

?>