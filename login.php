<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Management Login</title>
  <link rel="stylesheet" href="css/login.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <h1 class="register-title">System Admin Login</h1>
  <form class="register" action="login.php" method="post">
    <!-- <div class="register-switch">
      <input type="radio" name="sex" value="F" id="sex_f" class="register-switch-input" checked> 
      <label for="sex_f" class="register-switch-label">Female</label>
      <input type="radio" name="sex" value="M" id="sex_m" class="register-switch-input"> 
      <label for="sex_m" class="register-switch-label">Male</label>
    </div>-->
    <input name="S_ID" type="text" class="register-input" placeholder="User ID" >
    <input name="S_PASSWD" type="password" class="register-input" placeholder="Password" >
    <input type="submit" value="Login" class="register-button">
  </form>
  
  <?php
    include("mysql_connect.php");
	//$S_ID = "";
	//$S_PASSWD = "";
	
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		
		if (isset($_POST["S_ID"]))
			//echo "Hi";
			$S_ID = $_POST["S_ID"];
		if (isset($_POST["S_PASSWD"]))
			$S_PASSWD = $_POST["S_PASSWD"];

		$query = sprintf("SELECT * FROM system WHERE S_ID = '$S_ID' and S_PASSWD='$S_PASSWD' LIMIT 1;",
					mysql_real_escape_string($S_ID), mysql_real_escape_string($S_PASSWD));
		$result = mysql_query($query);
		
		//$s = mysqli_query($conn, $sql);
		
		
		if (mysql_num_rows($result) != 1)
        {
			// invalid login information
			echo "<p style='text-align:center; color:red ; font-size:250% '><b>帳號或密碼錯誤</b></p>";
        } else {
            // Login was successfull
            $row = mysql_fetch_array($result);
            // Save the user ID for use later
            //$_SESSION['S_loginId'] = $row['S_loginId'];
            // Save the username for use later
            session_start();
			$_SESSION['S_ID'] = $S_ID;
            header('Location:main.php');
			mysql_close($conn);
        }
	}
  ?>
  
</body>
</html>
