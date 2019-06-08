<?php
session_start();

 if (isset($_SESSION['user'])) {
   header('location: Payment.php');
} else {
	 header('location: login.php'); 
		}
		
?>