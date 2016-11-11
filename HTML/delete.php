<?php
include '../HTML/ctd.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
  echo file_get_contents("../HTML/log.php");// send to login page
  exit;
} 



    $username=$_SESSION['username'];
    $sql="DELETE  FROM  register  WHERE  reg_email = '$username'";
    $result=mysqli_query($conn,$sql);
    if($result){
        //session_start();
    }
    else{
    echo  "Unable  to  delete  Your  Account";
    }
    
    //  close  connection
    session_start();
    unset($_SESSION['username']);
    session_destroy();

    header("Location: ../HTML/log.php");
    exit;
    mysqli_close($conn);
    ?>
</body>
</html>