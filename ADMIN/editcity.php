<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["ct1"];
	$b=$_POST["ct2"];
	$str="update city set stateid='$a', cityname='$b' where cityid=".$_GET['cityid'];
	mysqli_query($con,$str);
	
	
	header("location:cityn.php");
?>