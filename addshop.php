<?php
	include 'header.php';
?>
<br/>																			
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>										
<br/>



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
			//echo "success";
		}
		else
		{
			print_r($errors);
		}
	}
	
	
	
	$con=mysqli_connect("localhost","root","","canteen");
	$a=$_POST["sp1"];
	$b=$_POST["sp2"];
	$c=$_POST["sp3"];
	$d=$_POST["s10"];
	$e=$_POST["sp8"];
	$f=$_POST["sp5"];
	$g=$_POST["sp4"];
	$h=$_POST["sp6"];
	$i=$_POST["sp7"];
	$j="Pending";
	$k="off";
	$str="insert into shopkeeper_reg(shopname,ownername,address,city,state,mobileno,email,username,password,image,status,on_status)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$destination','$j','$k')";
	mysqli_query($con,$str);
	//echo("Error description: " . mysqli_error($con));
	//header("location:gsr.php");
	echo "<table width='50%' align='center' >";
	echo "<tr>";
	echo "<td><h1 >YOUR USER ID:   </h1></td>";
	echo "<td><h1 >  $h </h1></td>";
	echo "</tr>";
	echo "</table>";
?>



<br/>
<br/>
<br/>
<br/>
<br/>																			
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>										
<br/>	
											

<?php
	include 'footer.php';
?>