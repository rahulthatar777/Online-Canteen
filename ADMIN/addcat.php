<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["c1"];
	$str="insert into category(catname)value('$a')";
	mysqli_query($con,$str);
	
	header("location:cat.php");
?>