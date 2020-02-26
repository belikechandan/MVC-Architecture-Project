<html>
<head>
<link rel="stylesheet" href="<?=baseUrl("/Assets/Style/style.css")?>">
</head>
 <body> 
	<?php require("./Views/header.php");?>
	<div class="inner">
	<h2> Update Course Form </h2>
	<form action="<?=baseUrl("/Courses/update")?>?whereCNo=<?= $cNo; ?> ">
	 <input type="hidden" value = <?= $cNo ?> name="whereCNo">
	  <label>
		Course Name 
		<input type="text" name="newName" value=<?= $row[0]["Course_Name"]; ?>>
	 </label>
	 <label>
		Duration
		<input type="text" name="newDuration" value=<?= $row[0]["Duration"]; ?>>
	 </label>
		
		<button name="action" value="update">Update Course</button>
	</form>
	</div>
</body>
</html>
