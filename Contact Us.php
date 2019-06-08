 <?php
 session_start();
 ?>
 
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
				
				<?php

                if (isset($_SESSION['user'])) {
                    echo "<h3>Welcome to the Unique Fashions!!!<a href='Logout.php' style='text-decoration: none';>(Sign out)</h3>";
                } else {
	                echo "<a href='Index.php'><img src='Images/Home.png' style='width:50px;height:30px;align:right;'>"	;
		        }
		
                ?>
				
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
				<img class="img2" src="Images/Contact.png">
			</div>
		
			<div class="cont" style="background-image:url(Images/f5.jpg);background-size:cover";>
				<div class="col1">
					<h2>Contact Information</h2>
					
					<p><strong>Unique Fashion - Head Office</strong></p>
					<p>Address: Uptown Shopping Complex Liberty Plaza, R.A.DE.Mel mawatha, Colombo 03</p>
					<p>Hotline Showrooms : +94 112 233 233</p>
					<p>Hotline Online Sales : +94 772 898 988</p>
					<p>E-mail: <a href="">mailtofh@uniquefashion.lk</a></p><br><br>
					<p>Find us:<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1665.3249226083738!2d79.85099348506841!3d6.9106228997677945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942865f1bfb%3A0x141db277b60011d8!2sLiberty+Plaza!5e0!3m2!1sen!2slk!4v1531546917244" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

					
				</div>
			</div>
		</div>
    </body>

</html>