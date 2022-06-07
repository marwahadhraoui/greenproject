<?php

	$host="localhost";
	$user="root";
	$pass="";
	$database="greenproject";
	$con = new mysqli($host,$user ,$pass, $database);
	// Check connection
	if ($con->connect_error) {
  		die("Connection failed: " . $con->connect_error);
	}
	//echo "Connected successfully <br>";