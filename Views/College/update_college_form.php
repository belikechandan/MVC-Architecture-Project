<html>
<head>
<link rel="stylesheet" href="<?=baseUrl("/Assets/Style/style.css")?>">
</head>
 <body> 
	<?php require("./Views/header.php");?>
	<div class="inner">
	<h2> Update College Form </h2>
	<form action="<?=baseUrl("/Colleges/update")?>" method="post">
	 <input type="hidden" value =<?= $regNo?> name="whereRegNo">
	 
	 <label>
		Name 
		<input type="text" name="newName" value=<?= $row[0]["College_Name"] ?>>
	 </label>
	 <label>
		Address
		<input type="text" name="newAddress" value=<?= $row[0]["Address"] ?>>
	 </label>
		
		<button name="action" value="update">Update</button>
	</form>
	</div>
</body>
</html>
