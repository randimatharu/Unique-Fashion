<!DOCTYPE HTML>
<html>
	
	<head>
		<title>Fashion World | Unique Fashion</title>
		<link href="./styles/mainstyle.css" rel="stylesheet" type="text/css" >
		<link href="./styles/style.css" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="./script/script.js"></script>
	</head>

	<body>
		<div class="container">
			
			<div class="header" style="background-image:url(Images/g.gif)">
				<h1>Unique Fashions</h1>
				<img class="img" src="Images/fashion.png">
				<img class="img1" src="Images/fashion.png">
			</div>

			<div class="nav" style="background-image:url(Images/f1.jpg)";>
				<h2>"Style is a way to say who you are without having to speak."</h2>
			
				<form name="myform1" method="post"  action="Login connection.php" onsubmit="return validate()" >  
			
					User Name : <input type="text" name="username">
			
					Password : <input type="password" name="password">
			
					<input type="submit" value="Login" name="Submit1">
				</form>
			</div>
		   
			<div class="lnavlogin" style="background-image:url(Images/f4.jpg)";>
				<h2>Create an account</h2>
				<form action="Sign link1.php" method="POST">

					<input placeholder="User Name" type="text" name="U_name" tabindex="2" required autofocus>

					<br>
					<br>
				
					<input placeholder="Email" type="Email" name="e-mail" tabindex="2" required autofocus>

					<br>
					<br>

					<input placeholder="Enter Password" type="password" name="password" tabindex="2" required autofocus>

					<br>
					<br>
				
					<input placeholder="Re-Enter Password" type="password" name="repassword" tabindex="2" required autofocus>

					<br>
					<br>
	

					<input type="Submit" name="Submit2" value="Create account">
                
				</form>
			</div>
			
			<div class="contlogin">
				<image src ="Images/admin.png" style="max-width:84%;min-height:640px;">
			</div>
			
		</div>
    </body>

</html>
		