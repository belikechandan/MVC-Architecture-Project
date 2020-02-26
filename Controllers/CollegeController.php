 <?php 
 require("./Model/College/collegeModel.php");
 class CollegeController{
	 
	 private $collegemodel;
	 
	 function __construct(){
		 $this->collegemodel = new collegeModel();
	 }
	 
	 public function list(){
		$rows = $this->collegemodel -> retriveAll();
		require("./Views/College/list_college.php");
	 }
	 
	 public function createForm(){
		 require("./Views/College/create_college_form.php");
	 }
	 
	 public function create(){
		 echo "creating college ".PHP_EOL;
		require_once("./Model/College/collegeModel.php");
		$this->collegemodel = new collegeModel();
		$newName=$_GET["newName"];
		$newAddress=$_GET["newAddress"];
		$this->collegemodel -> create($newName,$newAddress);
		redirect("/Colleges");
	 }
	    
	public function updateform(){
		$regNo = $_GET["whereRegNo"];
		$row = $this->collegemodel -> retriveWhere($regNo);
		require("./Views/College/update_college_form.php");
	}
	
	public function update(){
		echo "updating college".PHP_EOL;
		$newName=$_GET["newName"];
		$newAddress=$_GET["newAddress"];
		$whereRegNo=$_GET["whereRegNo"];
		$this->collegemodel->update($newName , $newAddress,$whereRegNo);
		redirect("/Colleges");
	}
	
	public function delete(){
		$regNo = $_GET["whereRegNo"];
		$this->collegemodel -> delete($regNo);
		redirect("/Colleges");;
	}
 
 }

 
 ?>
 