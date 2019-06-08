<?php

    $P_name=$_POST['P_name'];
	$P_price=$_POST['P_price'];
	$P_type=$_POST['P_type'];

	echo "$P_name</br>";
	echo "$P_price</br>";
    echo "$P_type</br>";

	require "connect.php";

		$sql="UPDATE products SET Product_price = '$P_price' , Product_type = '$P_type'
			  WHERE Product_name ='$P_name'";

		if ($conn->query($sql) === TRUE) {
			echo "Sucessfully Product Details Update";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

?>