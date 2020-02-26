 <html>
<head>
<link rel="stylesheet" href="<?=baseUrl("/Assets/Style/style.css")?>">
</head>
 <body >
	<?php require("./Views/header.php"); ?>
	<div class="inner">
	<table>
		<h2 center> College List </h2>
	<tr>
	<td>Reg No. </td><td>name</td><td>address</td><td><a href="<?= baseUrl("/Colleges/createForm")?>"><button>Create College</button></a></td>
	</tr>
	<?php
	foreach ($rows as $row){
		$regNo = $row["Reg_No"];  
	?>
	<tr>
	    <td><?= $regNo; ?> </td>
		<td><?= $row["College_Name"]; ?> </td>
		<td><?= $row["Address"]; ?></td>
		<td>
		 <a href="<?= baseUrl("/Colleges/updateForm")?>?whereRegNo=<?= $regNo ?> "> Update </a>
		</td>
		<td>
		 <a href="<?=baseUrl("/Colleges/Delete")?>?whereRegNo=<?= $regNo ?> "> Delete </a>
		</td>
	</tr>
	<?php 
	} 
	?>
	</table>
    </div>
</body>
</html>



	