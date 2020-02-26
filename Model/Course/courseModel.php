<?php

class courseModel{
	private $con;
	
	public function __construct(){
			$this->con = new PDO('mysql:host=localhost:3308;dbname=collegedb',"root","");
	}
			
	function retriveAll(){
			$query = $this->con->query("select * from course");
			return $query->fetchAll(PDO::FETCH_ASSOC);
			
	}
	
	function update($name,$duration,$cNo){
		$query = $this->con->query("UPDATE `course` SET `Course_Name` = '$name' , `Duration` = '$duration' WHERE `course`.`Course_No` = $cNo");
		
	}
		
	function create($name , $duration){
			$this->con->query("INSERT INTO `course` (`Course_Name`,`duration`) VALUES ('$name','$duration') ");
		}
		
	function retriveWhere($cNo){
		$query = $this->con->query("select * from course where `course`.`Course_No` = $cNo");
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function delete($cNo){
		$this->con->query("DELETE FROM `course` WHERE `course`.`Course_No` = $cNo");
	}
	
} 	
		
?>