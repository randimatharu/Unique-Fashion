<?php

    $user_name=$_POST['Uname'];
    $email=$_POST['email'];
    $telephone=$_POST['phone'];
    $comment=$_POST['comment'];

    echo "$user_name</br>";
    echo "$email</br>";
    echo "$telephone</br>";
    echo "$comment</br>";

	require "connect.php";

		$sql="INSERT INTO contact (UserName, Email, Telephone, Comment) 
			  VALUES ('$user_name','$email','$telephone','$comment')";

		if ($conn->query($sql) === TRUE) {
			header("Location: Thanks.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

?>