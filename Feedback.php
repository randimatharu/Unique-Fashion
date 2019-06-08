<!DOCTYPE HTML>
<html>

	<head>
		<title>Contatct US | Unique Fashions </title>
		<link href="./styles/mainstyle.css" rel="stylesheet" type="text/css" >
		<link href="./styles/style.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		<div class="container">

			<div class="header" style="background-image:url(Images/f2.jpg)";>
				<h1>Unique Fashions</h1>
				<img class="img" src="Images/fashion.png">
				<img class="img1" src="Images/fashion.png">
			</div>

			<div class="nav" style="background-image:url(Images/f1.jpg)";>
				<h2>"Style is a way to say who you are without having to speak."</h2>
				<h3>Welcome to the Unique Fashions!!! <a href="Logout.php" style="text-decoration: none";>(Sign Out)</a></h3>
			</div>
		
			<div class="lnav" style="background-image:url(Images/f4.jpg)";>
				<button class="button">Categories</button>
				
				<ul>
					<li>
						<a href="Special offers.php">Special Offers</a>
					</li><br><br>

					<li>
						<a href="Ladies Wears.php">Ladies Wear</a>
					</li><br><br>

					<li>
						<a href="Mens Wear.php">Mens Wear</a>
					</li><br><br>
				
					<li>
						<a href="Kids Wear.php">Kids Wear</a>
					</li><br><br>
					
					<li>
					<a href="Shoes.php">Shoes</a>
				    </li><br><br>

					<li>
						<a href="Accessories.php">Accessories</a>
					</li><br><br>

				</ul>
				
				<button class="button">Information</button>
				
				<ul>
					<li>
						<a href="About us.php">About us</a>
					</li><br><br>

					<li>
						<a href="Contact Us.php">Contact us</a>
					</li><br><br>
				
					<li>
						<a href="Help.php">Help</a>
					</li><br><br>
				</ul>


				<br><br><br>
				<img class="img2" src="Images/Feedback1.png">
			</div>
		
			<div class="cont" style="background-image:url(Images/f5.jpg);background-size:cover";>
				<div class="col1">
					
					<h2>We Value Your Feedback</h2>
					<form action="Contact link.php" method="POST">

						<input placeholder="User Name" type="text" name="Uname" tabindex="2" required autofocus>

						<br>
						<br>
               
						<input placeholder="Email" type="Email" name="email" tabindex="2" required autofocus>

						<br>
						<br>

						<input placeholder="Telephone" type="text" name="phone" tabindex="3" required autofocus>

						<br>
						<br>

						<textarea placeholder="Comment" name="comment" id="comment" title="comment" cols="100" rows="20"></textarea>

						<br>
						<br>

						<input type="Submit" name="Submit" value="Submit">
                
					</form>

					<br>
					<br>

				</div>
			</div>
		</div>
    </body>

</html>