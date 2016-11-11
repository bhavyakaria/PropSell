<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student"; //connect the connection page

$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
mysqli_select_db($conn, $dbname);


/*Check connection*/

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
?>