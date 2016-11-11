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
    <title>Sell</title>

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
      

      .buy input[type=submit]{
          width: 250px;
          height: 50px;
          font-size: 20px;
          background-color: #5FB446;
          outline: 0;
          border: 0;
          color: white;
      }

      .buy input[type=submit]:hover{
        background-color: white;
        color: #4CAF50;
      }

      .buy input[type=button]:focus{
        outline: none;
      }

      .sell-form select{
        width: 250px;
        height: 36px;
        padding: 5px;
        padding-left: 12px;
        background: transparent;
        color: grey;
        font-family: 'Exo', sans-serif;
        font-size: 20px;
        font-weight: 400;
      }

      .sell-form input[type=submit]{
        width: 250px;
        font-size: 20px;
        background-color: #5FB446;
        outline: 0;
        border: 0;
        color: white;
        font-family: 'Exo', sans-serif;
        font-size: 20px;
        font-weight: 400;
        padding: 5px;
      }
    </style>
  </head>

  <body class="form-page">

    <header>
      <div class="nav">
        <a href="prop.php"><img src="../IMAGES/logo.png"></a>
        <ul>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="profile.php">Profile</a></li>
        </ul>
      </div>
    </header>

    <center>

    <div class="buy">
      <h4>Sell</h4>
      <form name="myForm" class="sell-form" action="../HTML/sell-db.php" method="post" onsubmit="return validateRegister()" enctype="multipart/form-data">
        <input type="text" name="owner" placeholder="Owners Name" /><br><br>
        <input type="text" placeholder="Price" name="price" /><br><br>
        <input type="text" placeholder="Contact Number" name="contact_no" /><br><br>
        <select class="back" name="location">
          <option class="back" value="borivali">Borivali</option>
          <option class="back" value="bandra">Bandra</option>
          <option class="back" value="pedder road">Pedder Road</option>
        </select><br><br>
        <input type="radio" name="type" value="Commercial"> Commercial
        <input type="radio" name="type" value="Residential"> Residential<br><br>
        <input type="file" name="file"><br><br>
        <input type="submit" name="submit" class="submit">
      </form>
    </div>
    </center>

    <script type="text/javascript" src="../JS/javascript.js"></script>
  </body>



</html>
