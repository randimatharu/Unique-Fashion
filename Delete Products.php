<?php

    $P_name=$_POST['P_name'];
	$P_type=$_POST['P_type'];

	echo "$P_name</br>";
    echo "$P_type</br>";

	require "connect.php";

		$sql="DELETE FROM products WHERE Product_name ='$P_name' and Product_type='$P_type'";

		if ($conn->query($sql) === TRUE) {
			echo "Sucessfully Product Details Delete";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

?>