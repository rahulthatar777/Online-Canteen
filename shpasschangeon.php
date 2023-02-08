<?php

	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	error_reporting(0);
	$a=$_SESSION["s_id"];
	$b=$_POST["pass1"];
	$str = "select * from shopkeeper_reg where s_id='$a' and password='$b' ";
	$result = mysqli_query($con,$str);
	$no = mysqli_num_rows($result);
	if($no == 0)
	{
		$message = "YOUR ENTERED PASSWORD IS INCORRECT";
		echo "<script type='text/javascript'>alert('$message');location='passshopon.php';</script> ";
	}
	else
	{
		header('location:shpchangepasson.php');
	}
?>