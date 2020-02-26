 <?php
	
	$routes =array();
	$routes["test"] = "TestController/test";
	$routes["test/do"] = "TestController/doSomething";
	
	$routes["base"] ="HomeController/index";
	$routes["logout"]="LogoutController/logout";
	//colleges
	
	$routes["Colleges"]="CollegeController/list";
	$routes["Colleges/createForm"]="CollegeController/createForm";
	$routes["Colleges/create"]="CollegeController/create";
	$routes["Colleges/updateForm"]="CollegeController/updateForm";
	$routes["Colleges/update"]= "CollegeController/update";
	$routes["Colleges/Delete"]="CollegeController/delete";
	
	//Courses
	$routes["Courses"]="CourseController/list";
	$routes["Courses/createForm"]="CourseController/createForm";
	$routes["Courses/create"]="CourseController/create";
	$routes["Courses/updateForm"]="CourseController/updateForm";
	$routes["Courses/update"]= "CourseController/update";
	$routes["Courses/delete"]="CourseController/delete";
 ?>