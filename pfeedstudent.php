<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$a=$_POST["p1"];
	$b=$_POST["p2"];
	$c=$_POST["p3"];
	$d=$_POST["p4"];
	$e=$_POST["p5"];
	
	$str="insert into feedback(name,email,mobile,type,feedback)value('$a','$b','$c','$d','$e')";
	mysqli_query($con,$str);
	//echo $str;
	header("location:mainstudent.php");
?>