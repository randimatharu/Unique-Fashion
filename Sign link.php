<?php

    $user_name=$_POST['U_name'];
    $email=$_POST['e-mail'];
    $password=$_POST['password'];
	$repassword=$_POST['repassword'];

	echo "$user_name</br>";
    echo "$email</br>";
    echo "$password</br>";
	echo "$repassword</br>";


    require "connect.php";

		$sql="INSERT INTO customers (UserName, Email, Password, Repassword) 
			  VALUES ('$user_name','$email','$password', '$repassword')";

		if ($conn->query($sql) === TRUE) {
			header("Location: Payment.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

?>