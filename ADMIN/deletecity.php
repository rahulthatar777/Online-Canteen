<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$str="delete from city where cityid=".$_GET['cityid'];
	mysqli_query($con,$str);
	echo "delete succ.";
	header("location:cityn.php");
?>