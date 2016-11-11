<?php

include 'ctd.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("Location: ../HTML/opt.php"); // send to home page
   exit; 
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$con_password = $_POST['con_password'];


/*register is my table name below. And reg_email and all are the names that i have given in my phpadmin database*/
$chk_email = "SELECT * FROM register where reg_email = '$email'";
$result = mysqli_query($conn, $chk_email) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if($count >= 1){
	?>
	<script type="text/javascript">
			alert("Email already registered.");
	</script>
	<?php
	echo file_get_contents("../HTML/reg.php");
	$conn->close();
}

if($_POST['password'] != $_POST['con_password']){
	?>
	<script type="text/javascript">
			alert("Passwords not matching.");
	</script>
	<?php
	echo file_get_contents("../HTML/reg.php");
	$conn->close();
}


	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	//$file_size = $_FILES['file']['size'];
	//$file_type = $_FILES['file']['type'];
	$folder="../Prof-pic/";
	
	// new file size in KB
	//$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$reg = "INSERT INTO register (reg_name, reg_surname, sex, reg_email, reg_password, reg_con_password,file)
			VALUES ('$fname', '$lname', '$gender', '$email', '$password', '$con_password', '$final_file')";
		$rec = mysqli_query($conn,$reg);
	}


	if($rec === TRUE){
		?>
		<script type="text/javascript">
			alert("You have been registered.");
		</script>
		<?php
		//echo "<h1>Name: $fname<br>Email: $email";
		echo file_get_contents("../HTML/log.php");
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();

?>
