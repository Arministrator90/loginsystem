<?php 
class General{

	private $session;
	
	public function __construct($session){
		
		$this->session = $session;
		
	}
	
	public function logged_in () {
		
		return $this->session->get("id");
		
	}

	public function logged_in_protect() {
		
		if ($this->logged_in()) {
			header('Location: home.php');
			exit();		
		}
		
	}
	 
	public function logged_out_protect() {
		
		if ($this->logged_in() === false) {
			header('Location: index.php');
			exit();
		}
		
	}
}