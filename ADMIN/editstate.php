<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["st1"];
	$str="update statemaster set statename='$a' where stateid=".$_GET['stateid'];
	mysqli_query($con,$str);
	
	header("location:staten.php");
?>