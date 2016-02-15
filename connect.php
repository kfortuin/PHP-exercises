<?php
	$servername = "localhost";
	$username = "kfortuin";
	$password = "Kevstef8";

	$conn = mysqli_connect($servername, $username, $password, 'kfortuin_todo');


	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>