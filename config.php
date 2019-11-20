<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mhs";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//
	if ($conn->connect_error){
		die("Connection gagal: ".$conn->connect_error);
	}