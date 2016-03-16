<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
		}else{
			// Define $username and $password
			$S_ID=$_POST['S_ID'];
			$S_PASSWD=$_POST['S_PASSWD'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			include("mysql_connect.php");
			$query = sprintf("SELECT * FROM system WHERE S_ID = '$S_ID' and S_PASSWD='$S_PASSWD' LIMIT 1;",
					mysql_real_escape_string($S_ID), mysql_real_escape_string($S_PASSWD));
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['S_ID']=$S_ID; // Initializing Session
				header("location: main.php"); // Redirecting To Other Page
			} else {
				$error = "Username or Password is invalid";
			}
		mysql_close($conn); // Closing Connection
		}
	}
?>