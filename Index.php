<?php
session_start();
 ?>

<!DOCTYPE HTML>
<html>
	
	<head>
		<title>Fashion World | Unique Fashion</title>
		<link href="./styles/mainstyle.css" rel="stylesheet" type="text/css" >
		<link href="./styles/style.css" rel="stylesheet" type="text/css" >
		<link href="./styles/Slider.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		<div class="container">
			
			<div class="header" style="background-image:url(Images/g.gif)";>
				<h1>Unique Fashions</h1>
				<img class="img" src="Images/fashion.png">
				<img class="img1" src="Images/fashion.png">
			</div>

			<div class="nav" style="background-image:url(Images/f1.jpg)";>
				<h2>"Style is a way to say who you are without having to speak."</h2>
			
				<form name="myform2" method="post"  action="Login connect.php" onsubmit="return validate()" >  
			
					<h4>User Name : <input type="text" name="username">
			
					Password : <input type="password" name="password">
			
					<input type="submit" value="Login" name="Submit1"></h4>
				</form>
			</div>
		   
			<div class="lnavlogin" style="background-image:url(Images/f4.jpg)";>
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
						<a href="shoes.php">Shoes</a>
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
			</div>
			
			<div class="contlogin" style="background-image:url(Images/f3.jpg)";>
				<div class="slideshow-container">
			
			    <div class="mySlides fade">
                   <img src="Images/Main.png" style="min-width:85%;max-height:675px";>
                </div>
				
				<div class="mySlides fade">
                   <img src="Images/L.jpg" style="max-width:85%;min-height:675px";>
                </div>

                <div class="mySlides fade">
                   <img src="Images/M.jpg" style="max-width:85%;min-height:675px";>
                </div>
				
				<div class="mySlides fade">
                   <img src="Images/K.jpg" style="max-width:85%;min-height:675px";>
                </div>
				
				<div class="mySlides fade">
                   <img src="Images/s.jpg" style="max-width:85%;min-height:675px";>
                </div>
				
				<div class="mySlides fade">
                   <img src="Images/A.JPG" style="max-width:85%;max-height:675px";>
                </div>

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
		    
		
           <br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
			</div>
		
		</div>
    </body>

</html>
		