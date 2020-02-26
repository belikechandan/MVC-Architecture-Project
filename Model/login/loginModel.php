<?php
class loginModel{
	private $conn;
	
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost:3308;dbname=collegedb","root","");
	}
	
	public function isValidUser($username,$password){
		$stmt = $this->conn->query("select * from login where username = '".$username."' and password ='".$password."'");
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result?$result["username"]:false;
	}
}
