<?php
 
 include('cont.php');
 error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/r3.css">
</head>
<body>
	<video autoplay muted loop id="myVideo">
  <source src="ba_vid/dp.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
 
<form method="Post" action="register.php">
	
	<table>
		<th>Register</th>
		<tr>
			<td>Location:</td>
			<td><input type="text" name="Location" class="textInput"></td>
		</tr> 
		<tr>
			<td>Name:</td>
			<td><input type="text" name="Name" class="textInput"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="text" name="Gender" class="textInput"></td>
		</tr>
		<tr>
			<td>Blood Type:</td>
			<td><input type="text" name="Blood_Type" class="textInput"></td>
		</tr>
		<tr>
			<td>Birth Date:</td>
			<td><input type="Date" name="Birth_Date" class="textInput"></td>
		</tr>
		<tr>
			<td>Donated Last:</td>
			<td><input type="Date" name="Donated_Last" class="textInput"></td>
		</tr>
		<tr>
			<td>Phone No.:</td>
			<td><input type="text" name="Phone_No" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="Password" name="Password" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" class="Register"></td>
		</tr>
	</table>
</form>
<?php
if($_POST['register_btn']){

 //global $Location = ($Post['Location']);
 $Location = $_POST['Location'];
$Name = $_POST['Name'];
 $Gen= $_POST['Gender'];
   $Blood=$_POST['Blood_Type'];
    $BD=$_POST['Birth_Date'];	
    $Dl=$_POST['Donated_Last'];
     $Phone=$_POST['Phone_No'];
     $Password=$_POST['Password'];
        $sql="INSERT Into donor Values ('$Location','$Name','$Gen','$Blood','$BD','$Dl','$Phone','$Password')";
       $data= mysqli_query($conn,$sql);
        if($data){
        	$s="Congrats You are now a Life Saver";
        	echo "<h1>".$s."</h1>";

        }
        else{
        	echo "data not inserted";
        }
    }
?>
<a href="index.php" class="anch" style="margin-top: 300px;text-decoration: none;">Go Back To Login Page</a>
</body>
</html>
