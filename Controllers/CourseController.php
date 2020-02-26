 <?php 
 require("./Model/Course/courseModel.php");
 class CourseController{
	 
	 private $coursemodel;
	 
	 function __construct(){
		 $this->coursemodel = new courseModel();
	 }
	 
	 public function list(){
		$rows = $this->coursemodel -> retriveAll();
		require("./Views/Course/list_course.php");
	 }
	 
	 public function createForm(){
		 require("./Views/Course/create_course_form.php");
	 }
	 
	 public function create(){
		 echo "creating course ".PHP_EOL;
		require_once("./Model/Course/courseModel.php");
		$this->coursemodel = new courseModel();
		$newName=$_GET["newName"];
		$newDuration=$_GET["newDuration"];
		$this->coursemodel -> create($newName,$newDuration);
		redirect("/Courses");
	 }
	    
	public function updateform(){
		$cNo = $_GET["whereCNo"];
		$row = $this->coursemodel -> retriveWhere($cNo);
		require("./Views/Course/update_course_form.php");
	}
	
	public function update(){
		echo "updating course".PHP_EOL;
		$newName=$_GET["newName"];
		$newDuration=$_GET["newDuration"];
		$whereCNo=$_GET["whereCNo"];
		$this->coursemodel->update($newName , $newDuration,$whereCNo);
		redirect("/Courses");
	}
	
	public function delete(){
		$cNo = $_GET["whereCNo"];
		$this->coursemodel -> delete($cNo);
		redirect("/Courses");
	}
 
 }
  
 ?>
 