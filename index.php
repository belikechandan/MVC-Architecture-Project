<?php
	
	require("./Controllers/TestController.php");
	require("./Controllers/CollegeController.php");
	require("./Controllers/CourseController.php");
	require("./Controllers/HomeController.php");
	require("./Controllers/LogoutController.php");
	require("./Controllers/LoginController.php");
	require("./Controllers/PublicControllers.php");
	require("./routes.php");
	require("./lib/utility.php");

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	class FrontController{
		private const LOGIN_KEY ="LOGIN_KEY";
		 
		public function processRoutes(){
			global $routes;
			$url = $_GET["route"];
			$resourceRoute = $this->mappedRoute($routes,$url);
			if($resourceRoute===null){
				echo "URL Not found";
				die();
			}
			
			$isPublicRoute = $this->isPublicRoute($resourceRoute);
			if(!$this->loggedInUser() && !$isPublicRoute){
				$validUser=$this->authenticateRequest();
				
				if(!$validUser){
					$queryString =$_SERVER["QUERY_STRING"];
					$qString = str_replace("route=","",$queryString);
					require("./Views/login_failure.php");
					die();
				}
				$this->updateLoggedInUser($validUser);
			}
			$this->exeuteRoute($resourceRoute);
		}
		 
		private function mappedRoute($routes,$url){
			$url=($url==="")? "base" : $url;
			$mappedString =$routes[$url];
			return ($mappedString ? $mappedString : null);
		}
		
		private function loggedInUser(){
			session_start();
			return isset($_SESSION[self::LOGIN_KEY])? true : false;
		}
		
		private function authenticateRequest(){
			$loginController = new LoginController();
			$validUser = $loginController->authenticate();
			return $validUser?true:false;
		}
		
		private function updateLoggedInUser($loginValue){
			$_SESSION[self::LOGIN_KEY]= $loginValue;
		}
		private function exeuteRoute($resourceRoute){
			$parts = explode("/",$resourceRoute);
			$className =$parts[0];
			$methodName =$parts[1];
			$ctrlObj =new $className();
			$ctrlObj->{$methodName}();
		}
		
		private function isPublicRoute($resourceRoute): bool {
			$parts = explode("/",$resourceRoute);
			$className= $parts[0];
			return ($className === "PublicController"?true:false);
		}
	}
	
	$frontController = new FrontController();
	$frontController -> processRoutes();
	
?>