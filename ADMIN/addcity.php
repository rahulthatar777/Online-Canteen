<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["ct1"];
	$b=$_POST["ct2"];
	$str="insert into city(stateid,cityname)value('$a','$b')";
	mysqli_query($con,$str);
	
	header("location:cityn.php");
?>