<?php
require 'cont.php';

if (isset($_POST['location'])) {
	$location=$_POST['location'];
	if(!empty($location)){
		$query="SELECT * FROM blood_bank WHERE Location LIKE '$location'";
		$query_run=mysqli_query($conn, $query);

		
		if(mysqli_num_rows($query_run)>=1){
			echo "<table><tr><th>ID</th><th>Name</th><th>Location</th><th>Contact</th><th>A+</th><th>B+</th><th>A-</th><th>B-</th><th>O-</th><th>O+</th><th>AB+</th><th>AB-</tr>";
		  
			while($out=mysqli_fetch_array($query_run))
			{
				$id=$out[0];
				$name=$out[1];
				$loc=$out[2];
				$con=$out[3];
				$A=$out[4];
				$a=$out[5];
				$B=$out[6];
				$b=$out[7];
				$o=$out[8];
				$O=$out[9];
				$AB=$out[10];
				$ab=$out[11];

				echo "<tr><td>".$id."</td><td>".$name."</td><td>".$loc."</td><td>".$con."</td><td>".$A."</td><td>".$a."</td><td>".$B."</td><td>".$b."</td><td>".$o."</td><td>".$O."</td><td>".$AB."</td><td>".$ab."</td>";
		
			   
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
<form action="bloodbanksh.php" method="POST">
Location: <input type="char" name="location"><br>
<input id="in" type="submit">
</form>

</body>
</html> 