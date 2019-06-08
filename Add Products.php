<?php

    $P_name=$_POST['P_name'];
	$P_price=$_POST['P_price'];
	$P_type=$_POST['P_type'];

	echo "$P_name</br>";
	echo "$P_price</br>";
    echo "$P_type</br>";

	require "connect.php";

		$sql="INSERT INTO products (Product_name, Product_price, Product_type) 
			  VALUES ('$P_name','$P_price','$P_type')";

		if ($conn->query($sql) === TRUE) {
			echo "Sucessfully Product Added";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

?>