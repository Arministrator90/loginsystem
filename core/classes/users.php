<?php 
class Users extends CustomMedoo{
 	
	public $tableName = "admin";

	public function user_exists($username) {
	
		$count = $this->getFields( [ "username" ], [ "username" => $username ] );
		return count($count);
	}
	
	

	public function login($username, $password) {

		$login = $this->getFields([ "password", "id"], [ "username" => $username ]);
		if ($login[0]['password'] === sha1($password))
		{
			return $login[0]["id"];
		}
		else{
			return false;
		}
	
	}
	
}