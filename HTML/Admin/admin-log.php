<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student";//connect the connection page



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../CSS/design.css">

		<style type="text/css">
	      .message{
	        font-family: "Roboto";
	        color: white;
	        padding: 0;
	        margin: 0;
	        padding-top: 3px;
	        padding-bottom: 3px;
	      }

	      .message a{
	        color: white;
	        font-family: "Roboto";
	      }
    	</style>
	</head>

	<body class="form-page">
		
		<header>
      		<div class="nav">
        		<a href="prop.php"><img src="../IMAGES/logo.png"></a>
        		
      		</div>
    	</header>

    	<center>
				<div class="login">
					<h4>Admin Login</h4>
					<form name="logForm" class="login-form" action="../HTML/admin-db.php" onsubmit="return validateLogin()" method="POST">
						<input type="text" name="email" placeholder="username"><br><br>
						<input type="password" placeholder="password" name="password" /><br><br>
						<input type="submit" name="submit" class="submit">
						
					</form>
				</div>	
		</center>

		<script type="text/javascript" src="../JS/javascript.js"></script>
	</body>
	
</html>

