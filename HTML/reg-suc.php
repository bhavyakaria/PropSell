<?php
include '../HTML/ctd.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
  echo file_get_contents("../HTML/log.php");// send to login page
  exit;
} 
?>


<html>
  <head>
    <title>Search</title>

    <link rel="stylesheet" type="text/css" href="../CSS/design.css">
    <style type="text/css">
      .backs{
        top: 10%;
        width: 200px;
        height: 50px;
        font-size: 20px;
        background-color: #5FB446;
        outline: 0;
        border: 0;
        color: white;
        align:left;
      }
      .search{
        top: 10%;
        width: 250px;
        height: 50px;
        font-size: 20px;
        background-color: #5FB446;
        outline: 0;
        border: 0;
        color: white;
        align:left;
      }
    </style>
    
  </head>

  <body class="form-page">

    <header>
      <div class="nav">
        <a href="prop.php"><img src="../IMAGES/logo.png"></a>
        <ul>
          <li><a href="../HTML/logout.php">Logout</a></li>
          
          <li><a href="../HTML/profile.php">Profile</a></li>
        </ul>
      </div>
    </header>

    <center>

    <div class="buy">
      <form name="myForm" class="select-form" action="../HTML/search.php" method="post" onsubmit="return validateRegister()">
				<select class="back" name="type">
					<option class="back" value="residential">Residential</option>
					<option class="back" value="commercial">Commercial</option>
				</select><br><br>
				<select class="back" name="price_range">
					<option class="back" value="1">0 - 50,00,000</option>
					<option class="back" value="2">50,00,001 - 1,00,00,000</option>
          <option class="back" value="3">1,00,00,001 - 2,00,00,000</option>
				</select><br><br>
				<select class="back" name="location">
					<option class="back" value="borivali">Borivali</option>
					<option class="back" value="bandra">Bandra</option>
					<option class="back" value="pedder road">Pedder Road</option>
				</select><br><br>
				<input type="submit" name="search" class="search" value="Search">
      </form>
      <button class='backs'><a href='../HTML/opt.php' style="text-decoration : none">Back to Options</a></button>
    </div>

    </center>

    <script type="text/javascript" src="../JS/javascript.js"></script>
  </body>



</html>
