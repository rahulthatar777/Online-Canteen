<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	$a="off";
	
	$str="update shopkeeper_reg set on_status='$a' where s_id=".$_SESSION["s_id"];
	echo $str;
	mysqli_query($con,$str);
	//echo("Error description: " . mysqli_error($con));
	header("location:mainshop.php");
?>