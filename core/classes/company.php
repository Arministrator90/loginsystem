<?php

class Company extends CustomMedoo{
	
	private 	$columns = [ "id", "name", "address", "phone", "email", "country", "category", "industry", "zipcode" ];
	private 	$values = [];
	
	public		$tableName = "company";
	

	public function findById($id){
		
		$query = $this->getFields([ "*"], [ "id" => $id ]);
		
		if ($query == true){
			
			foreach ($this->columns as $column){
				
				$this->values[$column]				= $query[0][$column];
				
			}
			
			return $this;
			
		}
		
	}
	
	public function update($array){
		
		return $this->updateFields($array, ["id"=>$array["id"] ] );
		
	}
	
	
	$company->findById($id)->update(["address"=>'Adresa 2']);
	
}