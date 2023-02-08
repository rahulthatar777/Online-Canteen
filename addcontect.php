<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$a=$_POST["s1"];
	$b=$_POST["s2"];
	$c=$_POST["s3"];
	$d=$_POST["s4"];
	$e=$_POST["s5"];
	
	$str="insert into contact(name,subject,email,mobile,message)value('$a','$c','$b','$e','$d')";
	mysqli_query($con,$str);
	echo("Error description: " . mysqli_error($con));
	header("location:contact-us.php");
?>