<?php
	
	//localhost/kodecamp/someurl
	//localhost/kodecamp/index.php?route=someurl
	require("./Controllers/TestController.php");
	require("./Controllers/CollegeController.php");
	require("./Controllers/CourseController.php");
	require("./Controllers/HomeController.php");
	require("./Controllers/LogoutController.php");
	require("./Controllers/LoginController.php");
	require("./routes.php");
	require("./lib/utility.php");

	
	class FrontController{
		
		public function processRoutes(){
			global $routes;
			$url = $_GET["route"];
			$resourceRoute = $this->mappedRoute($routes,$url);
			if($resourceRoute===null){
				echo "URL Not found";
				die();
			}
			
		}
		private function mappedRoute(){}
		private function loggedInUser(){}
		private function authenticateRequest(){}
		private function updateLoggedInUser($loginValue){}
		private function exeuteRoute($resourceRoute){}
	}
		
	$frontController = new FrontController();
	$frontController -> processRoutes();
	
?>