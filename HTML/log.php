<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student";//connect the connection page


if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("location: ../HTML/opt.php"); // send to home page
   exit; 
}

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
        		<ul>
          			<li><a href="about-us.php">About Us</a></li>
          			<li><a href="reg.php">Sign Up</a></li>
        		</ul>
      		</div>
    	</header>

    	<center>
				<div class="login">
					<h4>Login</h4>
					<form name="logForm" class="login-form" action="../HTML/log-db.php" onsubmit="return validateLogin()" method="POST">
						<input type="text" name="email" placeholder="username"><br><br>
						<input type="password" placeholder="password" name="password" /><br><br>
						<input type="submit" name="submit" class="submit">
						<p class="message">Not registered? <a href="../HTML/reg.php">Create an account</a></p>
					</form>
				</div>	
		</center>

		<script type="text/javascript" src="../JS/javascript.js"></script>
	</body>
	
</html>

