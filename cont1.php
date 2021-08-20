<?php
 
 $mysql_host = "localhost";
 $mysql_user = "root";
 $mysql_pass = "";
 $mysql_db = 'blood_donation';
 mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die('could not connect');
 mysqli_select_db($mysql_db);
 echo "all ok";
 
 ?>
