<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	error_reporting(0);
	$a=$_POST["l1"];
	$b=$_POST["l2"];
	$d="student";
	$e="shop";
	if($d == $a)
	{
		$str = "select * from student_reg where username='$b' ";
		$result = mysqli_query($con,$str);
		$no = mysqli_num_rows($result);
		if($no == 0)
		{
			$message = "YOUR USERNAME IS INCORRECT";
			echo "<script type='text/javascript'>alert('$message');location='forgotpass.php';</script> ";
		}
		else
		{
			$str = "select * from student_reg where username = '$b'";
			$a = mysqli_query($con,$str);
			$user = mysqli_fetch_array($a);
			require_once("forgot-password-recovery-mail.php");
		}
	}
	else if($e == $a)
	{
		$str = "select * from shopkeeper_reg where username='$b' and status='Approve' ";
		$result = mysqli_query($con,$str);
		$no = mysqli_num_rows($result);
		if($no == 0)
		{
			$message = "YOUR USERNAME IS INCORRECT";
			echo "<script type='text/javascript'>alert('$message');location='login.php';</script> ";
		}
		else
		{
			$str = "select * from shopkeeper_reg where username = '$b'";
			$a = mysqli_query($con,$str);
			$user = mysqli_fetch_array($a);
			require_once("forgot-password-recovery-mail-shop.php");
		}
	}
?>