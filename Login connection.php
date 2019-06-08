<?php
session_start();
include("connect.php"); 
 

   if(isset($_POST["Submit1"]))
   {
	 $user=$_POST['username'];
     $password=$_POST['password'];	 

 

    $sql = "SELECT * FROM customers WHERE UserName = '$user' AND Repassword='$password' AND Type='Customer'";
    $row = mysqli_query($conn,$sql);

    if (mysqli_num_rows($row) == 1)
    {

       $_SESSION['user'] = $user; 
       header("location: ./Payment.php"); 
    }
	
    
      else{
	  echo "Wrong Username or Password";
}
    $sql = "SELECT * FROM customers WHERE UserName = '$user' AND Repassword='$password' AND Type='Admin'";
    $row = mysqli_query($conn,$sql);

    if (mysqli_num_rows($row) == 1)
    {

       $_SESSION['admin'] = $user; 
       header("location: ./Admin page.php"); 
    }
	
    
      else{
	  echo "Wrong Username or Password";
}
   }
?>