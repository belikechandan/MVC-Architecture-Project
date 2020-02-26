<html>
<head>
<link rel="stylesheet" href="<?=baseUrl("/Assets/Style/style.css")?>">
</head>
 <body>
	<?php require("./Views/header.php");?>
	<div class="inner">

	 <h2> Create A new Course </h2>
	<form action ="<?=baseUrl("/Courses/create")?>">
 
	<label>
		Name 
	<input type="text" name="newName">
	</label>
 
	<label>
		Duration
	<input type="text" name="newDuration">
	</label>

	<button name="action" value="create">Create Course</button>
	</form>
	<div>
 </body>
</html>
