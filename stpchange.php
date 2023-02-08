<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_SESSION["stid"];
	$b=$_POST["chpass1"];
	echo $b;
	$str="update student_reg set password='$b' where stid='$a'";
	mysqli_query($con,$str);
	
	header("location:mainstudent.php");
?>