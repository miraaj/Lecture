<?php
	
	$serverPath = "localhost";
	$user = "root";
	$password = "";
	$database = "form";

	$con = mysqli_connect($serverPath,$user,$password,$database);

	if(mysqli_connect_errno()){
		die("Unable to connect to db");	
	}
	// echo "connection success";



