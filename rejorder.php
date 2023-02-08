<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$t=$_GET['orderid'];
	$a="Reject";
	$b="Returned";
	$str="update book_order set status='$a',payment='$b' where orderid='$t'";
	echo $str;
	mysqli_query($con,$str);
	
	
	header("location:viewordershop.php");
?>