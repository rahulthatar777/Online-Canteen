<?php
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["sct1"];
	$b=$_POST["sct2"];
	$str="update subcategory set catid='$a', subcatname='$b' where subcatid=".$_GET['subcatid'];
	mysqli_query($con,$str);
	
	header("location:subcat.php");
?>