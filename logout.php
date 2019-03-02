<?php
	require 'setup.php';
	unset($_SESSION['username']);
	mysqli_close($databaseSQL); //Closes socket to MySQL! Important!
	header('Location: login.php'); //Redirects users
	exit("Logged out and redirecting to login page."); //End script with message to truly end page
?>