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
		$newName=$_POST["newName"];
		$newAddress=$_POST["newAddress"];
		$this->collegemodel -> create($newName,$newAddress);
		redirect("/Colleges");
	 }
	    
	public function updateform(){
		$regNo = $_POST["whereRegNo"];
		$row = $this->collegemodel -> retriveWhere($regNo);
		require("./Views/College/update_college_form.php");
	}
	
	public function update(){
		echo "updating college".PHP_EOL;
		$newName=$_POST["newName"];
		$newAddress=$_POST["newAddress"];
		$whereRegNo=$_POST["whereRegNo"];
		$this->collegemodel->update($newName , $newAddress,$whereRegNo);
		redirect("/Colleges");
	}
	
	public function delete(){
		$regNo = $_POST["whereRegNo"];
		$this->collegemodel -> delete($regNo);
		redirect("/Colleges");
	}
 
 }

 
 ?>
 