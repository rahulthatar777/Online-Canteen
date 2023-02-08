<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["s1"];
	$b=$_POST["s2"];
	$c=$_POST["s6"];
	$d=$_POST["s5"];
	$e=$_POST["s3"];
	$f=$_POST["s4"];
	$g=$_POST["s7"];
	$h=$_POST["s8"];
	$i=$_POST["s10"];
	$j=$_POST["s9"];
	$k=$_POST["gender"];
	echo $i;
	$str="insert into student_reg(Name,Address,mobile no,Email,college name,Department,Username,Password,City,State,Gender,Photo)value('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k',null)";
	mysqli_query($con,$str);
	
	header("location:gsr1.php");
?>
