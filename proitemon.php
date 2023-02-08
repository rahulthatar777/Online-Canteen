<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$t=$_GET['orderid'];
	$a="Delivered";
	$str="update book_order set status='$a' where orderid='$t'";
	echo $str;
	mysqli_query($con,$str);
	
	
	header("location:viewordershopon.php");
?>