<?php
	$con=mysqli_connect("localhost","root","","canteen");
	//echo("Error description: " . mysqli_error($con));
	$a=$_POST["a1"];
	echo "$a";
	$b= "app";
	$c= "rej";
	$d= "Approve";
	$e= "Reject";
	if($b==$a)
	{
		$str="update shopkeeper_reg set status='$d' where s_id=".$_GET['s_id'];
		mysqli_query($con,$str);
		//echo "$str";
		//echo("Error description: " . mysqli_error($con));
		header("location:apshop.php");
	}
	else 
	if($c==$a)
	{
		$str="update shopkeeper_reg set status='$e' where s_id=".$_GET['s_id'];
		mysqli_query($con,$str);
		//echo "$str";
		//echo("Error description: " . mysqli_error($con));
		header("location:rejshop.php");
	}
?>