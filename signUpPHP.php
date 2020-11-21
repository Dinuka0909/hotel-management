<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	if(!($connection = mysqli_connect("localhost","root","")))
		die("could not Connect");
	mysqli_select_db($connection,"hoteldb" );

	$sql = "INSERT INTO userdetails(FirstName,LastName,Email,UserName,Password) VALUES('$fname','$lname','$email','$uname','$pass')";
	if (mysqli_query($connection, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);


?>