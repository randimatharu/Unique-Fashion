<!DOCTYPE HTML>
<html>

	<head>
		<title> LOGIN </title>
		<link href="./styles/login.css" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="./script/script.js"></script>
		<style>
			body{
			background-image:url("Images/bg.jpg");
			}
		</style>
	</head>

	<body>
		<div class="login">
			<img src="Images/logo1.png" class="logo1">
			<br>
			<br>
			<h1 align="center"> LOGIN </h1>
		
			<form  action="Login connection.php" method="POST" name="myform" onsubmit="return validateform()" >
		
				<p>User Name</p>
				<input type="text" name="username" placeholder="User Name please"/>
				<br>
				<br>
		
				<p>Password</p>
				<input type="password" name="password" placeholder="Password please"/>
				<br>
				<br>
		
				<input type="submit" value="Login" name="Submit1"/>
				<br>
				<br>
				<a href="Create.php"> Create new account </a>
		
			</form>
		</div>
	</body>

</html>