<?php

class TestController{
	public function test(){
		echo "Test";
	}
	
	public function doSomething(){
	require("./Views/Test.php");
	}
}


?>