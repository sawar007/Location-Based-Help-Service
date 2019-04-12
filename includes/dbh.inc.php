<?php
	$servername ="localhost";
	$dbUsername = "root";
	$dbPassword = "flatno887";
	$dbName = "LoginSystem";

	$conn =mysqli_connect($servername, $dbUsername, $dbPassword, $dbName );

	if(!$conn){
		die("Connection Failed: ".mysqli_connect_error());
	}