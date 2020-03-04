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
	<td>Course No</td><td>Course Name</td><td>Duration</td>
	<td>
		<form action="<?=baseUrl("/Courses/createForm")?>" method="post">
		<button>Create Course</button></a>
		</form>
	</td>
	</tr>
			<?php
				foreach ($rows as $row){
				$cNo = $row["Course_No"];  
			?>
	<tr>
	    <td><?= $cNo; ?> </td>
	 	<td><?= $row["Course_Name"]; ?> </td>
		<td><?= $row["Duration"]; ?> </td>
		<td>
		 <form action= "<?=baseUrl("/Courses/updateForm")?>" method="post">
			<input type="hidden" name="whereCNo" value="<?= $cNo ?> "> 
			<button>Update</button>
		 </form>
		</td>
		<td>
		<form action="<?= baseUrl("/Courses/delete")?>" method="post">
				<input type="hidden" name="whereCNo" value="<?=$cNo ?>">
				<button>Delete</button>
			</form>
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



