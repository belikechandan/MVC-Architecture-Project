 <html>
<head>
<link rel="stylesheet" href="<?=baseUrl("/Assets/Style/style.css")?>">
</head>
 <body >
	<?php require("./Views/header.php"); ?>
	<div class="inner">
	<table>
		<h2 center> Course List </h2>
	<tr>
	<td>Course No</td><td>Course Name</td><td>Duration</td><td><a href="<?=baseUrl("/Courses/createForm")?>"><button>Create Course</button></a></td>
	<?php
	foreach ($rows as $row){
		$cNo = $row["Course_No"];  
	?>
	<tr>
	    <td><?= $cNo; ?> </td>
	 	<td><?= $row["Course_Name"]; ?> </td>
		<td><?= $row["Duration"]; ?> </td>
		<td>
		 <a href="<?=baseUrl("/Courses/updateForm")?>?whereCNo=<?= $cNo ?> "> Update </a>
		</td>
		<td>
		 <a href="<?=baseUrl("/Courses/delete")?>?whereCNo=<?= $cNo ?> "> Delete </a>
		</td>
	</tr>
	<?php 
	} 
	?>
	</table>
    </div>
</body>
</html>



