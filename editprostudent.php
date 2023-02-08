<?php
	
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
				$destination = "regimg/".$file_name;
				$destination1 = "admin/".$destination;
				move_uploaded_file($_FILES["image"]["tmp_name"],$destination1);
				echo "success";
			}
			else
			{
				print_r($errors);
			}
		}
		
		$a=$_GET['stid'];
		$con = mysqli_connect("localhost","root","","canteen");
		
		$b = $_POST['s1'];
		$c = $_POST['s2'];
		$d = $_POST['s3'];
		$e = $_POST['s4'];
		$f = $_POST['s5'];
		$g = $_POST['s6'];
		$h = $_POST['s7'];
		$i = $_POST['s8'];
		$j = $_POST['gender'];
		$k = $_POST['s10'];
		
		$str = "update student_reg set name = '$b', address = '$c',username = '$h',address = '$d',mobileno = '$g' ,email = '$f', collegename = '$d',department = '$e', city = '$k',state = '$i', gender = '$j',photo = '$destination' where stid='$a'";
		mysqli_query($con,$str);
		//echo $str;
		header('location:profilestudent.php');

?>