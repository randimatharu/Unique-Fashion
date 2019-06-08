 <?php
 session_start();
 ?>

<!DOCTYPE HTML>
<html lang="en">

	<head>
		<title>Help | Fashion House</title>
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
				
				<img class="img2" src="Images/help.png">
		</div>
			<div class="cont" style="background-image:url(Images/f5.jpg);background-size:cover";>
				<div class="col1">

					<h4><dt>(1)How to purchase products for the first time?</dt></h4>
						<dd>For that you need to create an account and login to the page and order.</dd>        
					<h4><dt>(2)How to login?</dt></h4>
						<dd>When you want to purchase a product,you will need to login first.If you don't have an account yet,There is an option to create account.If you have an account already enter your username and password to login. Then you can proceed.</dd>
					<h4><dt>(3)How to order?</dt></h4>
						<dd>Click the cart icon below your desired product</dd>
					<h4><dt>(4)How to pay?</dt></h4>
						<dd>You can pay through credit cards or debit cards.Payment details will be sent to your email account.</dd>
					<h4><dt>(5)Do you offer free delivery?</dt></h4>
						<dd>Delivery is free for Colombo and it's suburbs. Outstation delivery charges start at Rs.100.00.</dd>
					<h4><dt>(6)Do you deliver on weekends and public holidays?</dt></h4>
						<dd>Yes we do.</dd>
					<h4><dt>(7)How do I check the status of my order?</dt></h4>
						<dd>The order number will be e-mailed to you after the order is placed.You can call or email us to get the order status.</dd>
					<h4><dt>(8)How secure is Unique Fashoins online credit card processor?</dt></h4>
						<dd>All credit card transactions at Unique Fashions go through VeriSign. VeriSign owns more than half of the market share in all major e-commerce payment solutions in the world. Your personal information and credit card numbers are never stored at Unique Fashions. They are discarded right after your transaction is complete.</dd>

				</div>
			</div>
		</div>
    </body>

</html>