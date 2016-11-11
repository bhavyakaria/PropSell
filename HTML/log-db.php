<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student"; //connect the connection page

$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/*Check connection*/

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header('Location: ../HTML/opt.php'); // send to home page
   exit; 
}


$email = $_POST['email'];
$password = $_POST['password'];

//Create connection

/*register is my table name below. And reg_email and all are the names that i have given in my phpadmin database*/
$sql = "SELECT * FROM register where reg_email = '$email' AND reg_password = '$password'";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);



if($count === 1){
	$_SESSION['username'] = $_POST['email'];
	header("Location: ../HTML/opt.php");
    
}
else{
	?>
	<script type="text/javascript">
			alert("Error in login.");
	</script>
	<?php
	echo file_get_contents("../HTML/log.php");
}

$conn->close();

?>
