<?php
	//connection data
	$servername = "localhost";
	$username = "root";
	$password ="root";
	$dbname="student2";
	
	//handle of connection to database
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	//check if something bad happened with connection
	if ($conn->connect_error) {
	//if error print message of error into webpage
		die("Connection failed: " . $conn->connect_error);
	} 
?>