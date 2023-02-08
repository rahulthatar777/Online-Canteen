<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["sct1"];
	$b=$_POST["sct2"];
	$str="insert into subcategory(catid,subcatname)value('$a','$b')";
	mysqli_query($con,$str);
	header("location:subcat.php");
?>