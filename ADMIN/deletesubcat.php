<?php
	$con=mysqli_connect("localhost","root","","canteen");
	
	$str="delete from subcategory where subcatid=".$_GET['subcatid'];
	mysqli_query($con,$str);
	echo "delete succ.";
	header("location:subcat.php");
?>