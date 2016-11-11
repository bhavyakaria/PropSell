<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student"; /*Your database name*/



$type = $_POST['type'];
$price_range = $_POST['price_range'];
$location = $_POST['location'];

$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/*Check connection*/

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}


    global $conn;

    switch ($price_range) {
      case '1':
        $cond1 = 0;
        $cond2 = 5000000;
        break;
      
      case '2':
        $cond1 = 5000001;
        $cond2 = 10000000;
        break;

      case '3':
        $cond1 = 10000001;
        $cond2 = 20000000;
        break;
    }

    $sql = "SELECT * FROM products where type = '$type' AND location = '$location' AND (price >= '$cond1' AND price <= '$cond2')";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    echo "<!DOCTYPE html>
    <html>
      <head>
        <title>Result</title>
        <link rel='stylesheet' type='text/css' href='../CSS/design.css'>
        <style>

          .box{
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
          }

          .container{
            width: 980px;
            height: 180px;
            align-items: center;
            margin: auto;
            margin-bottom: 25px;
          }

          .image{
            width: 230px;
            height: 180px;
            margin: 0;
            padding: 0;
            float: left;
            margin-left: 80px;
          }

          .text{
            color: #ffffff;
            width: 620px;
            height: 180px;
            float: right;
            margin: 0;
            padding: 0;
            text-align: left;
            margin-left: 50px;
          }

          h2{
            padding-top: 0;
            margin-top: 0;
            margin-bottom: 0;
          }
          p{
            margin-top: 3px;
            padding: 0;
          }
          h3{
            font-size: 28px;
            padding: 0;
            margin: 0;
            margin-top: 8px;
          }
          h4{
            padding: 0;
            margin: 0;
          }
          .back{
            padding: 10px;
            width: 110px;
            height: 50px;
            font-size: 24px;
            background-color: #5FB446;
            outline: 0;
            border: 0;
            color: white;
          }
          .back a{
            color: #ffffff;
          }

        </style>
      </head>
      <body class='form-page'>

        <header>
              <div class='nav'>
                <a href='../HTML/prop.php'><img src='../IMAGES/logo.png'></a>
                <ul>
                  <li><a href='../HTML/logout.php'>Logout</a></li>
                  <li><a href='../HTML/profile.php'>Profile</a></li>
                </ul>
              </div>
        </header>

        <!--<ul >
          <li class='image'><img src='img-1.jpg' width='200' height='auto' />
          <li><h1>Building Name/Property Name:</h1><br>
          <p>Builders Name:</p><br>
          <h2>Price:<br></h2></li>
        </ul>-->
        <div class='box'>
          <div class='products_box'>";

    if( mysqli_num_rows($result) > 0){

      while ($row = mysqli_fetch_assoc($result)){
        echo "
              <div class='container'>
                <div class='image'>
                  <img src='../IMAGES/".$row['image']."' width='230' height='180'/>
                </div>
                <div class='text'>
                  <h2>".$row['owner']."</h2>
                  <p>".$row['type']."</p>
                  <h3>Price:<br>Rs.".$row['price']."</h3>
                  <h3>Contact No.:".$row['contact_no']."</h3>
                </div>
              </div>
        			</div>
        		</div>
        	</body>

        </html>


        ";
      }
      echo "<center><button class='back'><a href='../HTML/reg-suc.php'>Back</a></button><center>";
    }else{
      echo "<center><h1>Whoops! no result</h1></center>";
      echo "<center><button class='back'><a href='../HTML/reg-suc.php'>Back</a></button><center>";
    }
$conn->close();

?>
