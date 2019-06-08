<!DOCTYPE HTML>
<html>

	<head>
		<title>Details | Unique Fashions</title>
		<link href="./styles/mainstyle.css" rel="stylesheet" type="text/css" >
		<link href="./styles/style.css" rel="stylesheet" type="text/css" >
		<style>
			table, th, td {
                border: 0.1px solid black;
				width:800px;
			} 
		</style>
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
				<h3>Welcome to the Unique Fashions!!! <a href="Admin index.php" style="text-decoration: none";>(Sign Out)</a></h3>
			</div>
			
			<div class="lnav" style="background-image:url(Images/f4.jpg)";>
				<button class="button">Categories</button>
      
				<ul>
					<li>
						<a href="Admin Page.php">Add Products</a>
					</li><br><br><br>
			
					<li>
						<a href="Update.php">Update Products</a>
					</li><br><br><br>

					<li>
						<a href="Delete.php">Delete Products</a>
					</li><br><br><br>
			
					<li>
						<a href="Details.php">Products Details</a>
					</li><br><br><br>
					
					<li>
						<a href="Feedbackview.php">Feedback Details</a>
					</li><br><br><br>
				</ul>

				<br><br><br>
				<img class="img2" src="Images/details.png">
			</div>
		
			<div class="cont" style="background-image:url(Images/f5.jpg);background-size:cover";>
				<br>
				<?php

					require "connect.php";
	
						$result = mysqli_query($conn,"SELECT * FROM products;");
						if (!$result) {
							die("Database query failed: " . mysqli_error($conn));
						}

							echo "<table align='center'>
							<tr>
								<th bgcolor='gold'>Product_name</th>
								<th bgcolor='gold'>Product_price</th>
								<th bgcolor='gold'>Product_type</th>		
							</tr>";

						while ($row = mysqli_fetch_array($result)) {
							echo "<tr>
								<td align='center' bgcolor='#BDB76B'>{$row['Product_name']}</td>
								<td align='center' bgcolor='#BDB76B'>{$row['Product_price']}</td>
								<td align='center' bgcolor='#BDB76B'>{$row['Product_type']}</td>
							</tr>";  
							}
							echo "</table>"; 
				?>

			</div>
		</div>
    </body>

</html>