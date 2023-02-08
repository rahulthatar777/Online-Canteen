<?php
error_reporting(0);
session_start();
	$con = mysqli_connect("localhost","root","","projectapproval");
	
	$uname = $_POST['text1'];
	$pass = $_POST['password'];
	 if(isset($_POST['saveForm']))
	{
		$str = "select * from facultyreg where username = '$uname' and password = '$pass'";
		$a = mysqli_query($con,$str);
		$no = mysqli_num_rows($a);
		if($no==0)
		{
			header("location:flogin.php?message=Wrong Username or Password!! & username=".$uname);
		}
		else
		{
			$str = "select * from facultyreg where username = '$uname' and password = '$pass'";
			$a = mysqli_query($con,$str);
			$r = mysqli_fetch_array($a);
			$_SESSION ['fname'] = $r ['fname'];
			$_SESSION ['lname'] = $r ['lname'];
			$_SESSION ['facultyregid']   = $r['facultyregid'];
			
			header("location:index-faculty.php");
		}
	}
	else
	{
		$str = "select * from facultyreg where username = '$uname'";
		$a = mysqli_query($con,$str);
		$no = mysqli_num_rows($a);
		if($no==0)
		{
			header("location:flogin.php?message=Wrong Username!! &username=".$uname);
		}
		else
		{
			$str = "select * from facultyreg where username = '$uname'";
			$a = mysqli_query($con,$str);
			$user = mysqli_fetch_array($a);
			require_once("forgot-password-recovery-mail-faculty.php");
			
		}
	}
?>