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
		
		$a=$_GET['s_id'];
		$con = mysqli_connect("localhost","root","","canteen");
		
		$b = $_POST['sp1'];
		$c = $_POST['sp2'];
		$d = $_POST['sp3'];
		$e = $_POST['sp4'];
		$f = $_POST['sp5'];
		$g = $_POST['sp6'];
		$h = $_POST['sp7'];
		$i = $_POST['sp8'];
		
		$str = "update shopkeeper_reg set shopname = '$c', ownername = '$b',username = '$g',address = '$d',state = '$h' ,city = '$i', mobileno = '$f',email = '$e', image = '$destination' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshopon.php');

?>