<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$t = $_GET['username'];
	$h=$_POST["s8"];
	$str="update shopkeeper_reg set password='$h' where username ='$t'";
	echo $str;
	mysqli_query($con,$str);
	
	header("location:login.php");
?>