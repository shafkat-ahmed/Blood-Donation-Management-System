<!DOCTYPE html>
<meta charset="UTF-8">
 <?php
require 'cont.php';


if (isset($_POST['blood_type'])) {
	$blood_type=$_POST['blood_type'];
	if(!empty($blood_type)){
		$query="SELECT * FROM donor WHERE Blood_Type LIKE '$blood_type'";
		$query_run=mysqli_query($conn, $query);

		
		if(mysqli_num_rows($query_run)>=1){
			echo "<table><tr><th>Location</th><th>Name</th><th>Gender</th><th>Blood_type</th><th>Birth_date</th><th>Donated_last</th><th>Phone_no</th></tr>";
		  
			while($out=mysqli_fetch_array($query_run))
			{
				
				$loc=$out[0];
				$name=$out[1];
				$gen=$out[2];
				$BT=$out[3];
				$BD=$out[4];
				$DL=$out[5];
				$PN=$out[6];
				echo "<tr><td>".$loc."</td><td>".$name."</td><td>".$gen."</td><td>".$BT."</td><td>".$BD."</td><td>".$DL."</td><td>".$PN."</td>";
				
		
			   
		}
		echo ("</table>");
		
 
		}
		else{
			echo 'No results found';
		}
	}
}
 ?>
 <html lang="en-us">
 <link rel="stylesheet" type="text/css" href="table.css">
<body>
<video autoplay muted loop id="myVideo">
  <source src="ba_vid/dp.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<form action="donorsearch.php" method="POST">
Blood type: <input type="char" name="blood_type"><br>
<input id="in" type="submit">
</form>

</body>
</html> 