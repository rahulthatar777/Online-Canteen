<?php
	session_start();
	error_reporting(0);

    if(isset($_FILES['image']))
	{
		$errors = array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];

		$file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));

		$expensions = array("jpeg","jpg","png");

		if(in_array($file_ext,$expensions)=== false) 
		{
			$errors[]="extension not allowed,please choose a Valid file. ";
		}

		if($file_size>5242880 )
		{
			$errors[]='File size must be excately 5MB';
		}

		if(empty($errors)==true)
		{
			$destination = "product/".$file_name;
			$destination1 = "admin/".$destination;
			move_uploaded_file($_FILES["image"]["tmp_name"],$destination1);
			//echo "success";
		}
		else
		{
			print_r($errors);
		}
	}
	
	
	
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_SESSION["s_id"];
	$b=$_POST["p1"];
	$c=$_POST["p2"];
	$d=$_POST["p3"];
	$e=$_POST["p4"];
	$f=$_POST["p5"];
	$g=$_POST["p6"];
	$str="insert into productupload(s_id1,productname,category,subcategory,qty,description,price,photo)values('$a','$b','$c','$d','$e','$f','$g','$destination')";
	mysqli_query($con,$str);
	//echo("Error description: " . mysqli_error($con));
	header("location:prouploadon.php");
?>