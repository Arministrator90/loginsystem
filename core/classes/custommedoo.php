<?php 
class CustomMedoo{
 	
	public $db;
	public $tableName;
	
	public function __construct($database) {
	    $this->db = $database;
	}	
	
	
	public function getFields($fields, $where = NULL)
	{
	
		return  $this->db->select ($this->tableName, $fields, $where);

	}
	
	public function insertFields($fields){
		
		return $this->db->insert($this->tableName, $fields);
		
	}
	
	public function updatetFields($fields, $where = NULL){
		
		return $this->db->update($this->tableName, $fields, $where);
		
	}

}