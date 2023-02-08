<?php
	session_start();
	$con=mysqli_connect("localhost","root","","canteen");
	
	$a=$_POST["p1"];
	$str = "select * from productupload
	inner join shopkeeper_reg on shopkeeper_reg.s_id= productupload.s_id1 where p_id=".$_GET['p_id'];
	$result=mysqli_query($con,$str);
	$row=mysqli_fetch_array($result);
	//echo $str;
	$t=$_GET['p_id'];
	$a=$_POST["p1"];
	$b=$_SESSION["stid"];
	$c=$row['price'];
	$d=$row['s_id'];
	$e=$a*$c;
	
	date_default_timezone_set('Asia/Kolkata');
	$date= date("F d, Y H:i",time());
	$timestamp = time() + 60*60;
	$time = date('H:i',$timestamp);
	$q="Pending";
	$z="not";
	$str="insert into book_order(p_id,sid,qty1,price1,stid,datetime,ontime,status,payment)value('$t','$d','$a','$e','$b','$date','$time','$q','$z')";
	mysqli_query($con,$str);
	echo $str;
	echo("Error description: " . mysqli_error($con));
	header("location:payment.php?p1=$e");
?>