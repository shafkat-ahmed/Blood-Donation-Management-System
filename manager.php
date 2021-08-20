<?php
include ('cont.php');
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
 $result = mysqli_query($conn,"Select * from manager_info where Name = '$username' and Password = '$password'")
  or die('Failed to query database');
 $row = mysqli_fetch_array($result);
 if ( $row['Name'] == $username && $row['Password'] == $password ) {
 	echo "<tr>form action= update.php method=post>";
  echo "login success! Welcome ".$row['Name'];
  echo "<table><tr><th>Id</th><th>Name</th><th>Contact</th><th>Password</th></tr>";
		  
		  
				$id=$row[0];
				$name=$row[1];
				$loc=$row[2];
				$password=$row[3];
				
                $_SESSION["id"] = $id;
				echo "<tr><td>".$id."</td><td>".$name."</td><td>".$loc."</td><td>".$password."</td>";
				echo"<td><input type=submit value=update></td>";
             echo"</form></tr>";
            $h='join.php';


 } else {
     echo "Failed to login!";
}

?>
	<a  href="join.php">Branch Info</a>;

</body>
</html>