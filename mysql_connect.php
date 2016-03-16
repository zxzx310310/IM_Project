<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$servername = "localhost";
	$username = "hr";
	$password = "hr";
	$dbname = 'sysmang';
	
	// Create connection
	$conn = mysql_connect($servername, $username, $password);
	
	// Check connection
	/*
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	*/
	$db_selected = mysql_select_db($dbname, $conn);
	if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}
	
?>