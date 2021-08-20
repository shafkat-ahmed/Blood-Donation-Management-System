<?php
 include('cont.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
    <style type="text/css">
		html{

			background-color:powderblue;
		}
	</style>

</head>
<body>
<form method="post"  >
	
	Delete Profile?<input type="submit" name="sub" value=DELETE >
    </form>
	<?php
	
    $ps=$_SESSION["password"];
    $na= $_SESSION["name"];
	if($_POST["sub"])
	{
		$sql="DELETE from donor Where Name='$na' and Password='$ps'";
		$data=mysqli_query($conn,$sql);
		if($data)
		{
			echo "Deleted";
		}

	} 
	
	?>

</body>
</html>




