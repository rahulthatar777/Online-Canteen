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
	$str="insert into student_reg(name,address,mobileno,email,collegename,department,username,password,city,state,gender,photo)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$destination')";
	mysqli_query($con,$str);
	//echo("Error description: " . mysqli_error($con));
	//header("location:gsr.php");
	echo "<table width='50%' align='center' >";
	echo "<tr>";
	echo "<td><h1 >YOUR USER ID:  $g </h1></td>";
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