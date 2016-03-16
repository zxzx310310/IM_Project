<?php  session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Index</title>
  <link rel="stylesheet" href="css/main.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
</script>
</head>

<?php

  if(isset($_SESSION['S_ID'])){
	//echo " Welcome Here";
	//echo $_SESSION['S_ID'];
  }else {
    header('Location:login.php');
  }
?>
<body>
  <div id="wrap">
  
    <div id="header">
      <h1><a href="main.php">System Data Analysis</a></h1>
    </div>
	
    <div id="top">
	</div>
	
    <div id="contentt">
      <div id="headermenu"> 
        <div class="headerm">
          <ul>
            <li><a href="#">Home</a></li> 
			<li><a href="#">list1</a></li> 
			<li><a href="#">list2</a></li> 
			<li><a href="#">list3</a></li>
			<li><a href="#">list4</a></li> 
			<li><a href="logout.php">Logout</a></li>
		  </ul>
		</div>
	  </div>

      <div class="middle" id="mid">
	    <h2><a href="#">Product Display Image</a></h2>
	    <br />
        <a href="productDiplay.php">
	      <img src="assets/object.png" alt="display image" style="border: 3px solid #ccc;" />
	    </a>
	    <br /><br />
	    Enter image view detailed.
      </div>

	  <div class="right">
	    <h2>Tag Cloud</h2>
	  </div>

	  <div style="clear: both;"> 
	  </div>

    </div>
  
	<div id="bottom"> 
	</div>
	
	<div id="footer">
	  <!--Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, Thanks to <a href="http://www.openwebdesign.org/">custom web design</a></div> -->
	</div>
  </body>
</html>