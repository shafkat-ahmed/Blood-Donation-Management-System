<?php
include ('cont.php');
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/r2.css">
	<title>Welcome Boss</title>
</head>
<body>
	<video autoplay muted loop id="myVideo">
  <source src="ba_vid/dp.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	<?php 
 // to get values passe from form in login.php file
 $username = "";

if(isset($_POST['un'])){
    $username = $_POST['un'];
}
 $password = "";
if(isset($_POST['ps'])){
    $password = $_POST['ps'];
 }
 // to prevent mysql injection
 $username = stripcslashes($username);
 $password = stripcslashes($password);
 $username = mysqli_real_escape_string($conn,$username);
 $password = mysqli_real_escape_string($conn,$password);

 //connect to the server select database

 // Query the database for user
 $result = mysqli_query($conn,"Select * from donor where Name = '$username' and Password = '$password'")
  or die('Failed to query database');
 $row = mysqli_fetch_array($result);
 if ( $row['Name'] == $username && $row['Password'] == $password ) {
  echo "login success! Welcome ".$row['Name'];
  echo "<table><tr><th>Location</th><th>Name</th><th>Gender</th><th>Blood_Type</th><th>Birth_Date</th><th>Donated Last</th><th>Contact</th><th>Password</th></tr>";
		  
			
				$loc=$row[0];
				$name=$row[1];
				$gen=$row[2];
				$bt=$row[3];
				$bd=$row[4];
				$dl=$row[5];
				$con=$row[6];
				$password=$row[7];
				$_SESSION["loc"] = $loc;
                 $_SESSION["dl"] =$dl;
                 $_SESSION["password"]=$password;
                 $_SESSION["name"]=$name;


				echo "<tr><td>".$loc."</td><td>".$name."</td><td>".$gen."<td>".$bt."</td><td>".$bd."</td><td>".$dl."</td><td>".$con."</td><td>".$password."</td>";
				
 } else {
     echo "Failed to login!";
}

?>
<a href="update.php?l=$loc&d=$dl&p=$password">Edit</a>;
<br><br><br>
<a href="delete.php?l=$loc&d=$dl&p=$password">Delete</a>;
</body>
</html>