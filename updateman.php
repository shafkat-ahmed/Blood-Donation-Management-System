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
<body >	
<form method="post"  >
	A+:<input type="text" name="ap" class="textInput" >
	B+:<input type="text" name="bp" class="textInput">
	A-:<input type="text" name="an" class="textInput" >
	B-:<input type="text" name="bn" class="textInput" >
	O-:<input type="text" name="on" class="textInput" >
	O+:<input type="text" name="op" class="textInput" >
	AB+:<input type="text" name="abp" class="textInput" >
	AB-:<input type="text" name="abn" class="textInput" >
	<input type="submit" name="sub" value=submit >
    </form>
	<?php
	$id=$_SESSION["id"];
	
	if($_POST["sub"])
	{
		$sql="UPDATE blood_bank Set A_pos ='$_POST[ap]',B_pos ='$_POST[bp]',A_neg='$_POST[an]',B_neg='$_POST[bn]',O_neg='$_POST[on]',O_pos='$_POST[op]',AB_pos='$_POST[abp]',AB_neg='$_POST[abn]' Where Id='$id'";
		$data=mysqli_query($conn,$sql);
		if($data)
		{
			echo "Updated";
		}
        else{
		echo "NOT UPDATED";
	} 
	
	}
	?>

</body>
</html>
