<?php

	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	error_reporting(0);
	$a=$_SESSION["stid"];
	$b=$_POST["pass1"];
	$str = "select * from student_reg where stid='$a' and password='$b' ";
	$result = mysqli_query($con,$str);
	$no = mysqli_num_rows($result);
	if($no == 0)
	{
		$message = "YOUR ENTERED PASSWORD IS INCORRECT";
		echo "<script type='text/javascript'>alert('$message');location='passstudent.php';</script> ";
	}
	else
	{
		header('location:stpchangepass.php');
	}
?>