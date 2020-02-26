<?php
	
	//localhost/kodecamp/someurl
	//localhost/kodecamp/index.php?route=someurl
	require("./Controllers/TestController.php");
	require("./Controllers/CollegeController.php");
	require("./Controllers/CourseController.php");
	require("./Controllers/HomeController.php");
	require("./Controllers/LogoutController.php");
	require("./routes.php");
	require("./lib/utility.php");
	require("./Controllers/LoginController.php");
	
	$url = $_GET["route"];
	if($url===""){
		$url="base";
	}
	$mappedString = $routes[$url];
	if($mappedString===null){
		echo "URL Not found";
		die();
	}
	//tracing enable
	session_start();
	echo session_id();
	$username = $_SESSION["USER_NAME"];
	if($username===null){
		$logincontroller = new LoginController();
		$ValidUser = $logincontroller -> authenticate();
		if(!$ValidUser){
			echo "Login Failure";
			die();
		}else{
			$_SESSION["USER_NAME"] = $ValidUser;
		}
	}
	
	
	$parts = explode("/",$mappedString);
	$className = $parts[0];
	$methodName = $parts[1];
	
	$ctrlObj = new $className();
	$ctrlObj ->{$methodName}();
		
?>