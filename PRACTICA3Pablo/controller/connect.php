<?php
	$servername = "localhost";
	$username = "adminSquare";
	$password = "adminSquare";
	$dbname = "yoursquare";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


?>