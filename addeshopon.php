<?php

	$a=$_SESSION["shopname"];
	$con = mysql_connect("localhost","root","","canteen");
	
	if($_POST['sp1'] != null)
	{
		$b = $_POST['sp1'];
		$str = "update shopkeeper_reg set shopname = '$b' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp2'] != null)
	{
		$c = $_POST['sp2'];
		$str = "update shopkeeper_reg set ownername = '$b' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp3'] != null)
	{
		$c = $_POST['sp3'];
		$str = "update shopkeeper_reg set userrname = '$c' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp4'] != null)
	{
		$d = $_POST['sp4'];
		$str = "update shopkeeper_reg set address = '$d' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp5'] != null && $_POST['sp6'] != null)
	{
		$e = $_POST['sp5'];
		$f = $_POST['sp5'];
		$str = "update shopkeeper_reg set state = '$e', city = '$f' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp7'] != null)
	{
		$g = $_POST['sp7'];
		$str = "update shopkeeper_reg set city = '$g' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp8'] != null)
	{
		$h = $_POST['sp8'];
		$str = "update shopkeeper_reg set mobileno = '$h' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['sp9'] != null)
	{
		$i = $_POST['sp9'];
		$str = "update shopkeeper_reg set email = '$i' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}
	elseif($_POST['image'] != null)
	{
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
				//echo "success";
			}
			else
			{
				print_r($errors);
			}
		}
		$str = "update shopkeeper_reg set image = '$destination' where s_id='$a'";
		mysqli_query($con,$str);
		header('location:profileshop.php');
	}

?>