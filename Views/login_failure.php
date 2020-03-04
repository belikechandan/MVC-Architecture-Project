<html>
	<head>
		<style rel="stylesheet">
			body{
				display:flex;
				justfy-content:center;
				align-items:center;
				margin:0;
				padding:0;
				height:100vh;
			}
			.main{
				padding:64px;
				width:60%;
				border:2px dashed green;
				margin:auto;
			}
				
		</style>
	</head>
		
	<body> 
			<div class="main">
			
			<form action="<?=baseURL("/".$qString)?>">
			<div>
				<label>
					<input type="text" name="username">
					</label>
					
				<label>
					<input type="password" name="password">
				</label>
				
				<button>Login</button>
			</div>
			</form>
						
		</div>
		
	</body>
