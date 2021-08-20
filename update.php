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
	Location:<input type="text" name="loc" class="textInput" >
	Donated Last:<input type="text" name="dl" class="textInput">
	Password:<input type="text" name="ps" class="textInput" >
	<input type="submit" name="sub" value=submit >
    </form>
	<?php
	$loc=$_SESSION["loc"];
    $dl=$_SESSION["dl"];
    $ps=$_SESSION["password"];
    $na= $_SESSION["name"];
	if($_POST["sub"])
	{
		$sql="UPDATE donor Set Location='$_POST[loc]',Donated_Last='$_POST[dl]',Password='$_POST[ps]' Where Name='$na' and Password='$ps'";
		$data=mysqli_query($conn,$sql);
		if($data)
		{
			echo "Updated";
		}
	} 
	else{
		echo "NO";
	}
	?>
	
</body>
</html>




