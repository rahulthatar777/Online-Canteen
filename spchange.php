<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_SESSION["s_id"];
	$b=$_POST["chpass1"];
	echo $b;
	$str="update shopkeeper_reg set password='$b' where s_id='$a'";
	mysqli_query($con,$str);
	
	header("location:mainshopon.php");
?>