<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$t = $_GET['username'];
	$h=$_POST["s8"];
	$str="update student_reg set password='$h' where username ='$t'";
	mysqli_query($con,$str);
	
	header("location:login.php");
?>