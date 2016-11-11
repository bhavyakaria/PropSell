<?php

include('conn.php');

if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header('Location: ../HTML/admin.php'); // send to home page
   exit; 
}


$email = $_POST['email'];
$password = $_POST['password'];

//Create connection

/*register is my table name below. And reg_email and all are the names that i have given in my phpadmin database*/
$sql = "SELECT * FROM admin where email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);



if($count === 1){
	$_SESSION['username'] = $_POST['email'];
	header("Location: ../HTML/admin.php");
    
}
else{
	?>
	<script type="text/javascript">
			alert("Error in login.");
	</script>
	<?php
	echo file_get_contents("../HTML/admin-log.php");
}

$conn->close();

?>
