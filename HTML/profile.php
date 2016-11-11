<?php
include '../HTML/ctd.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
  echo file_get_contents("../HTML/log.php");// send to login page
  exit;
} 
$username = $_SESSION['username'];
$prof = "SELECT * FROM register where reg_email = '$username'";
$result = mysqli_query($conn, $prof) or die(mysqli_error($conn));

/*while($row = mysqli_fetch_assoc($result)){
      $firstname=$row['fname'];
      $lastname=$row['lname'];
      $email=$row['email'];
      }*/
?>

<html>
  <head>
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="../CSS/design.css">
    <style type="text/css">
      .container{
        width: 900px;
        margin: auto;
      }
      p{
        font-size: 25px;
      }

      .text{
        padding-top: 20px;
        width: 800px;
        height: 85px;
      }

      .back{
        width: 160px;
        height: 50px;
        font-size: 20px;
        background-color: #5FB446;
        outline: 0;
        border: 0;
        color: white;
        align:left;
      }
      .images{
        width: 180px;
        height: 200px;
        margin: 0;
        padding: 0;
        float: left;
        margin: 10px;
      }
      .images img{
        width: 180px;
        height: 180px;
        border-radius: 50%;
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
    <?php
      while ($row = mysqli_fetch_assoc($result)){
        echo "
              <div class='container'>
                  
                  <div class='images'>
                    <img src='../Prof-pic/".$row['file']."'>
                  </div>

                  <div class='text'>
                    <p>Name: ".$row['reg_name']." ".$row['reg_surname']."</p>
                    <p>Email: ".$row['reg_email']."</p>
                    <p>Gender: ".$row['sex']."</p>
                  </div>
              </div>
              
              <div style='width: 100%; overflow: hidden;''>
                <div style='width: 600px; float: left;'></div>
                <div style='margin-left: 620px;''></div>
              </div>

            </div>
          </div>
        </body>

      </html>


        ";
      }
      echo "<div class='container'>
              <button class='back'><a href='../HTML/opt.php'>Back to Search</a></button>
              <button class='back'><a href='../HTML/delete.php'>Delete Account</a></button>
            </div>";
    ?>
</body>
</html>