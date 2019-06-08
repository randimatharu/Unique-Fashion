<!DOCTYPE HTML>
<html>

	<head>
		<title>Admin Update Page | Unique Fashions</title>
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
				<h3>Welcome to the Unique Fashions!!! <a href="Admin index.php" style="text-decoration: none";>(Sign Out)</a></h3>
			</div>
			
			<div class="lnavlogin" style="background-image:url(Images/f4.jpg)";>
				<button class="button">Categories</button>
      
				<ul>
					<li>
						<a href="Admin Page.php">Add Products<a>
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

			</div>
		
			<div class="contlogin" style="background-image:url(Images/f5.jpg);background-size:cover";>
				<div class="col1">
		
					<form action="Update Products.php" method="POST">

						Product Name :<br><input placeholder="Product Name" type="text" name="P_name" tabindex="2" required autofocus>

						<br>
						<br>
				
						Product Price :<br><input placeholder="Product Price" type="text" name="P_price" tabindex="3" required autofocus>

						<br>
						<br>
				
						Product Type :<br>
				            <select name="P_type">
								<option>Ladies Wears</option>
								<option>Mens Wears</option>
								<option>Kids Wears</option>
								<option>Special offers</option>
								<option>Shoes</option>
								<option>Accessories</option>
				
							</select>

						<br>
						<br>
						<input type="Submit" name="upade" value="Update Details">
			   
					</form>
				</div>
			</div>
		</div>
	</body>

</html>
             
