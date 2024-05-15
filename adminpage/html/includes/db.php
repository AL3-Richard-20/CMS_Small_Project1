<?php
	
	$con = new mysqli("localhost", "root", "", "admin_panel");

	if ($con->connect_error) {

	    die("Connection failed: " . $con->connect_error);
	}


?>