<?php
	session_start();

	if(!isset($_SESSION['id']))
	{
		header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Database TODO test</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>