<?php

	$host = "localhost";
	$dbname = "siracbit";
	$user = "root";
	$pass = "";


	$dsn = "mysql:host=".$host.";dbname=".$dbname;

	try {
		$conn = new PDO($dsn,$user,$pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch(Exception $e) {
		"error: ".$e->getMessage();
	}


?>