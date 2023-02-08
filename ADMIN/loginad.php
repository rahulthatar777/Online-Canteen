<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	error_reporting(0);
	$a=$_POST["a1"];
	$b=$_POST["a2"];
	$str = "select * from admin where username='$a' and password='$b' ";
	$result = mysqli_query($con,$str);
	$no = mysqli_num_rows($result);
	if($no == 0)
	{
		$message = "YOUR ID OR PASSWORD IS NOT CORRECT";
		echo "<script type='text/javascript'>alert('$message');location='adminn.php';</script> ";
	}
	else
	{
		$_SESSION["admin"] = "admin";
		header('location:home.php');
	}
?>