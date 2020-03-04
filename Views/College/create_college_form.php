<html>
<head>
<link rel="stylesheet" href="<?=baseUrl("/Assets/Style/style.css")?>">
</head>
 <body>
	<?php require("./Views/header.php");?>
	<div class="inner">

	 <h2> Create A new College </h2>
	<form action ="<?=baseUrl("/Colleges/create")?>" method="post">
 
	<label>
		Name 
	<input type="text" name="newName">
	</label>
 
	<label>
		Address
	<input type="text" name="newAddress">
	</label>

	<button name="action" value="create">Create College</button>
	</form>
	<div>
 </body>
</html>
