<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$a=$_POST["st1"];
	
	$str="insert into statemaster(statename)value('$a')";
	mysqli_query($con,$str);
	
	header("location:staten.php");
?>