 <?php
 session_start();
 ?>

<!DOCTYPE HTML>
<html>

	<head>
		<title>About Us | Fashion House</title>
		<link href="./styles/mainstyle.css" rel="stylesheet" type="text/css" >
		<link href="./styles/about.css" rel="stylesheet" type="text/css" >
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
				<img class="img2" src="Images/us.png">
			</div>
		
			<div class="cont" style="background-image:url(Images/f5.jpg);background-size:cover";>
				<br><br>
				<h1 style="color:maroon"><Center>About Us</h1>
	   
				<h2 style="color:darkblue"> <center> Dear customers !!! Wanna know something about us ???</h2>
				<br>
				<p><font size="4"><b>"Unique Fashion"</b> is actually a reflection of hardwork of five people. We started our journey in the year 2017 and within one year we developed our service into online also. As we wanted to spread our business across various parts of the country,we thought that online service will be really helpful.At start we had to work hard inorder to compete with other fashion stores but within a short period of time we have gained a crowd of valuable customers.</font></p>

				<img class="center" align="center" src="Images/show.jpg" width="450px" height="350px" >
				<br>
				<p> <font size="4">We have only one showroom now. And it is situated in "Uptown Shopping Complex Liberty Plaza, R.A.DE.Mel mawatha, Colombo 03". It is closed on Sundays, Poyadays and on other merchantile holidays. Through our website you can place your orders online and we will deliver you the parcels within 3 working days. If you have any problem in our service or if you want to know any detail you can simply drop an email to <a href="">mailtofh@uniquefashion.lk</font></a>.</p>
			</div>
		</div>
	<body>

</html>