<?php
include 'ctd.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
  echo file_get_contents("../HTML/log.php");// send to login page
   exit;
} 
?>

<html>
  <head>
    <title>Option</title>
    <link rel="stylesheet" type="text/css" href="../CSS/design.css">
    <style type="text/css">
      .options{
        width: 100%;
        position: absolute;
        top: 46%;
        margin: auto;
        vertical-align: middle;
        text-align: center;
        font-family: 'Roboto';
        font-size: 30px;
      }

      .options button{
        width: 200px;
        height: 50px;
        padding: 10px;
        outline: 0;
        border: 0; 
        margin: 1px; 
        color: black;
        font-family: 'Roboto';
        font-size: 25px;
      }

      .options button:hover{
        background-color: #4953F3;
        color: white;
        border: 1px solid white;
        width: 199px;
        height: 49px;
      }
    </style>

  </head>

  <body class="opt" bgcolor="black">

    <header>
      <div class="nav">
        <a href="prop.php"><img src="../IMAGES/logo.png"></a>
        <ul>
          <li><a href="../HTML/logout.php">Logout</a></li>
          <li><a href="../HTML/profile.php">Profile</a></li>
        </ul>
      </div>
    </header>

    <div class="options">
          <button onclick="window.open('../HTML/reg-suc.php')">Buy</button>
          <button onclick="window.open('../HTML/sell.php')">Sell</button>
    </div>   
  </body>



</html>
