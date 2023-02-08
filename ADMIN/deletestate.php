<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$str="delete from statemaster where stateid=".$_GET['stateid'];
	mysqli_query($con,$str);
	echo "delete succ.";
	header("location:staten.php");
?>