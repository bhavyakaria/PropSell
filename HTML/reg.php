<?php
include 'ctd.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("Location: ../HTML/opt.php"); // send to home page
   exit; 
}

?>

<html>
  <head>
    <title>Registration</title>

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
          <li><a href="log.php">Login</a></li>
        </ul>
      </div>
    </header>


    <div class="reg">
      <h4>Register</h4>
      <form name="myForm" class="register-form" action="../HTML/db.php" method="post" onsubmit="return validateRegister()" enctype="multipart/form-data">
        <input type="text" name="fname" placeholder="First Name" /><br><br>
        <input type="text" placeholder="Last Name" name="lname" /><br><br>
        <input type="text" placeholder="Email address" name="email" /><br><br>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female<br><br>
        <input type="password" placeholder="Password" name="password" /><br><br>
        <input type="password" placeholder="Confirm Password" name="con_password" /><br><br>
        <input type="file" name="file"><br><br>
        <input type="submit" name="submit" class="submit">
        <p class="message">Already registered? <a href="log.php">Sign In</a></p>
      </form>
    </div>


    <script type="text/javascript" src="../JS/javascript.js"></script>
  </body>



</html>
