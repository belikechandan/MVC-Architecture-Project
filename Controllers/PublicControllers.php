 <?php
 class PublicController{
	 public function index(){
		 require("./Views/Public/default.php");
	 }
	 
	 public function contacts(){
		 require("./Views/Public/contacts.php");
		 }
	
	public function feedback(){
		require("./Views/Public/feedback.php");
	}
 }
 ?>
 