<?php
	//Database configuration file
	$servername = "localhost"; //Server name for your Database
	$username = "username"; //Username for the Databse access
	$password = "password"; //Password for the Databse access
	$dbname = "databasename"; //Database name for the appication

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	include_once("includedFiles.php");	
?>
