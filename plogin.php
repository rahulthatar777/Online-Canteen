<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	error_reporting(0);
	$a=$_POST["l1"];
	$b=$_POST["l2"];
	$c=$_POST["l3"];
	$d="student";
	$e="shop";
	if($d == $a)
	{
		$str = "select * from student_reg where username='$b' and password='$c' ";
		$result = mysqli_query($con,$str);
		$no = mysqli_num_rows($result);
		if($no == 0)
		{
			$message = "YOUR ID OR PASSWORD IS NOT CORRECT";
			echo "<script type='text/javascript'>alert('$message');location='login.php';</script> ";
		}
		else
		{
			$str = "select * from student_reg where username='$b' and password='$c' ";
			$result = mysqli_query($con,$str);
			$r= mysqli_fetch_array($result);
			$_SESSION["studentname"] = $r['name'];
			$_SESSION["stid"] = $r['stid'];
			header('location:mainstudent.php');
		}
	}
	else if($e == $a)
	{
		$str = "select * from shopkeeper_reg where username='$b' and password='$c' and status='Approve' ";
		$result = mysqli_query($con,$str);
		$no = mysqli_num_rows($result);
		if($no == 0)
		{
			$message = "YOUR ID OR PASSWORD IS NOT CORRECT";
			echo "<script type='text/javascript'>alert('$message');location='login.php';</script> ";
		}
		else
		{
			$str = "select * from shopkeeper_reg where username='$b' and password='$c' ";
			$result = mysqli_query($con,$str);
			$r= mysqli_fetch_array($result);
			$_SESSION["shopname"] = $r['ownername'];
			$_SESSION["s_id"] = $r['s_id'];
			header('location:mainshop.php');
		}
	}
?>