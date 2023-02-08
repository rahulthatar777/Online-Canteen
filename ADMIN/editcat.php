<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["c1"];
	$str="update category set catname='$a' where cid=".$_GET['cid'];
	mysqli_query($con,$str);
	
	header("location:cat.php");
?>