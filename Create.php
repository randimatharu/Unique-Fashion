<!DOCTYPE HTML>
<html>
	<head>
		<title> CREATE </title>
		<link href="./styles/signup.css" rel="stylesheet" type="text/css" >
		<style>
			body{
			background-image:url("Images/bg.jpg");
			}
		</style>
	</head>

	<body>
		<div class="signup">
			<img src="Images/logo1.png" class="logo1">
			<br>
			<h1 align="center"> CREATE A NEW ACCOUNT </h1>
		
			<form action="Sign link.php" method="POST" name="form2">
		
				<p>Username</p>
				<input placeholder="User Name" type="text" name="U_name" tabindex="2" required autofocus>
		
				<p>Email_Id</p>
				<input placeholder="Email" type="text" name="e-mail" tabindex="2" required autofocus >
		
				<p>Password</p>
				<input placeholder="Enter Password" type="password" name="password" tabindex="2" required autofocus>
		
				<p>Re_Enter Password</p>
				<input placeholder="Re-Enter Password" type="password" name="repassword" tabindex="2" required autofocus>
		
				<input type="Submit" name="Submit2" value="Create account">
				<br>
				<br>
				<a href="Login.html"> Already registered? </a>
		
			</form>
		</div>
	</body>

</html>