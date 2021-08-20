

<?php
 
 include('cont.php');
 error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manager Login</title>
	<link rel="stylesheet" type="text/css" href="css/r1.css">  
</head>
<body>
	<div class="content">
	<img src="image/imgi.png" height="100px" width="100px">
	<form method="Post" action="manager.php">
    <b style=" padding-left: 85px; color:#ffffff;">Manager Login</b>
		<br>
		<table align="center">
			<tr>
				<td width="200px" height="50px"><b>Username</b></td>
				<td width="100px" height="50px"><input type="text" name="un" placeholder="Enter username"></td>
			</tr>
			<tr>
				<td width="200px" height="50px"><b>Password</b></td>
				<td width="100px" height="50px"><input type="password" name="ps" placeholder="Enter Password"></td>
			</tr>
			<tr>
			<td ><input type="submit" name="sub" value ="LOGIN"></td> 
			</tr>
		
		</table>
	</form>
</div>
<video autoplay muted loop id="myVideo">
  <source src="ba_vid/dp.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	
</body>
</html>