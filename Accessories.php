 <?php
 session_start();
 ?>
 
<!DOCTYPE HTML>
<html>

	<head>

		<title>Accessories | Unique Fashions</title>
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
						<a href="Special offers.php">Watches</a>
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
				<img class="img2" src="Images/Accessories.png">
			</div>
			<div class="cont" style="background-image:url(Images/f5.jpg);background-size:cover";>
			
		
				<?php

				
				require "connect.php";

						$query = "select * from products where Product_type = 'Accessories'";
						$result = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($result)) {

							$filename = $row['Product_name'];
							$itemprice = $row['Product_price'];
							$itemname = substr($filename,0,-4);

							echo "<div class='gallery'>";
							echo "<img src='Product Images/$filename' alt='$filename'>";
							echo "<div class='desc'>$itemname - Rs.$itemprice<br> <a href='Log.php'>  
							<img src='Images/icon.png' style='width:42px;height:42px;border-radius:4px;algin:left;'></a> </div>
							</div>";
							  
							

						}
				
				?>
                          

			</div>
		</div>
    </body>

</html>