<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$str="delete from category where cid=".$_GET['cid'];
	mysqli_query($con,$str);
	echo "delete succ.";
	header("location:cat.php");
?>