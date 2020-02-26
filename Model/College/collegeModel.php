<?php

class collegeModel{
	private $con;
	
	public function __construct(){
			$this->con = new PDO('mysql:host=localhost:3308;dbname=collegedb',"root","");
	}
			
	function retriveAll(){
			$query = $this->con->query("select * from colleges");
			return $query->fetchAll(PDO::FETCH_ASSOC);
			
	}
	
	function update($name,$address,$regNo){
		$query = $this->con->query("UPDATE `colleges` SET `College_Name` = '$name' , `Address` = '$address' WHERE `colleges`.`Reg_No` = $regNo");
		
	}
		
	function create($name , $address){
			$this->con->query("INSERT INTO `colleges` (`College_Name`,`Address`) VALUES ('$name','$address') ");
		}
		
	function retriveWhere($regNo){
		$query = $this->con->query("select * from colleges where `colleges`.`Reg_No` = $regNo");
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function delete($regNo){
		$this->con->query("DELETE FROM `colleges` WHERE `colleges`.`Reg_No` = $regNo");
	}
	
} 	
		
?>