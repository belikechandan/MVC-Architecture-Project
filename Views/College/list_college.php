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
	<td>Reg No. </td><td>name</td><td>address</td>
	<td>
		<form action="<?= baseUrl("/Colleges/createForm")?>" method="post">
			<button>Create College</button></a>
		</form>
	</td>
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
			<form action="<?= baseUrl("/Colleges/updateForm")?>" method="post">
				<input type="hidden" name= "whereRegNo" value="<?= $regNo ?>">
				<button>Update</button>
			</form>
		</td>
		<td>
			<form action="<?= baseUrl("/Colleges/Delete")?>" method="post">
				<input type="hidden" name="whereRegNo" value="<?=$regNo ?>">
				<button>Delete</button>
			</form>
		</td>
	</tr>
	<?php 
	} 
	?>
	</table>

    </div>
	
</body>
</html>



	