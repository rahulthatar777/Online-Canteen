<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a="Done";
	$t = "SELECT *
	FROM book_order
	ORDER BY orderid DESC
	LIMIT 1";
	$er=mysqli_query($con,$t);
	$row=mysqli_fetch_array($er);
	$str="update book_order set payment='$a' where orderid=".$row['orderid'];
	mysqli_query($con,$str);
	echo $str;
	header("location:thnx.php");
?>