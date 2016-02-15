<?php
	session_start();

	if(!isset($_SESSION['id']))
	{
		header("Location: login.php");
	}else{
		header("Location: indexpage.php");
	}
?>