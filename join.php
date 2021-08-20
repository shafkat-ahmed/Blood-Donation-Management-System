 <?php
require 'cont.php';

if (isset($_POST['ID'])) {
	$ID=$_POST['ID'];
	if(!empty($ID)){
		$query="SELECT * FROM manager_info LEFT JOIN blood_bank on manager_info.ID=blood_bank.ID and manager_info.ID=". $ID;

		$query_run=mysqli_query($conn, $query);

		
		if(mysqli_num_rows($query_run)>=1){
			echo "<table><tr><th>ID</th><th>Name</th><th>Branch</th><th>Password</th><th>Location</th><th>Contact</th><th>A+</th><th>B+</th><th>A-</th><th>B-</th><th>O-</th><th>O+</th><th>AB+</th><th>AB-</th></tr>";
		  
			while($out=mysqli_fetch_array($query_run))
			{
				$ID=$out[0];
				$name=$out[1];
				$branch=$out[2];
				$pass=$out[3];
				$loc=$out[6];
				$cont=$out[7];
				$A=$out[8];
				$B=$out[9];
				$a=$out[10];
				$b=$out[11];
				$o=$out[12];
				$O=$out[13];
				$AB=$out[14];
				$ab=$out[15];

				echo "<tr><td>".$ID."</td><td>".$name."</td><td>".$branch."</td><td>".$pass."</td><td>".$loc."</td><td>".$cont."</td><td>".$A."</td><td>".$B."</td><td>".$a."</td><td>".$b."</td><td>".$o."</td><td>".$O."</td><td>".$AB."</td><td>".$ab."</td>";
				
		
			   
		}
		echo ("</table>");
		
 
		}
		else{
			echo 'No results found';
		}
	}
}
 ?>

 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="css/join.css">
 </head>
<body>
	<video autoplay muted loop id="myVideo">
  <source src="ba_vid/dp.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<a href=updateman.php>Update</a>
<form id="fs" action="join.php" method="POST">
ID: <input type="char" name="ID"><br>
<input type="submit">
</form>

</body>
</html> 