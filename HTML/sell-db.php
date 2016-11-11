<?php
include '../HTML/ctd.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
  echo file_get_contents("../HTML/log.php");// send to login page
  exit;
}
 

$owner = $_POST['owner'];
$price = $_POST['price'];
$contact = $_POST['contact_no'];
$location = $_POST['location'];
$type = $_POST['type'];




$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
//$file_size = $_FILES['file']['size'];
//$file_type = $_FILES['file']['type'];
$folder="../IMAGES/";

// new file size in KB
//$new_size = $file_size/1024;  
// new file size in KB

// make file name in lower case
$new_file_name = strtolower($file);
// make file name in lower case

$final_file=str_replace(' ','-',$new_file_name);

if(move_uploaded_file($file_loc,$folder.$final_file))
{
	$reg = "INSERT INTO products (owner, price, contact_no, location, type, image)
		VALUES ('$owner', '$price', '$contact', '$location', '$type', '$final_file')";
	$rec = mysqli_query($conn,$reg);
}


if($rec === TRUE){
	?>
	<script type="text/javascript">
		alert("Your property has been added!");
	</script>
	<?php
	//echo "<h1>Name: $fname<br>Email: $email";
	echo file_get_contents("../HTML/opt.php");
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
