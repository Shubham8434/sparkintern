<?php

// Connecting to database 
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "sparkbank";

$conn = mysqli_connect($servername, $username, $password, $database);


	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>