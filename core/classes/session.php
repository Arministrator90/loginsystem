<?php

session_start();

class Session{
	
	private $session;
	
	public function __construct(){
		global $_SESSION;
		$this->session = $_SESSION;
		
	}
	
	public function get($key){
		
		return isset ($this->session[$key]) ? $this->session[$key] : false;
		
	}
	
	public function put($key, $value)
	{
		global $_SESSION;
		$_SESSION[$key] = $value;
		
	}
	
}