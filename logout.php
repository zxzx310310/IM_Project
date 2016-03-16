<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<html>
		<body>
			<?php
				session_start();
				if(session_destroy()) // Destroying All Sessions
				{
					header("Location: login.php"); // Redirecting To Home Page
				}
			?>
        
      </body>
  </html>
</head>

        


