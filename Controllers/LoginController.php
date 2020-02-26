<?php
require("./Model/login/loginModel.php");
class LoginController{
	private $model;
	public function __construct(){
		$this -> model = new loginModel();
	}
	
	function authenticate(){
		$username = $_GET["username"];
		$password = $_GET["password"];
		$isValidUser = $this->model->isValidUser($username,$password);
		return $isValidUser;
	}
}
?>