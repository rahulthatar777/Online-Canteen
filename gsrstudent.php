<?php
	session_start();
	
	if($_SESSION["stid"] && $_SESSION["studentname"] ) 
	{
		$a=$_SESSION["studentname"];
	}
	else
	{
		header("location:login.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Site Metas -->
		<title>ONLINE CANTEEN SYSTEM</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Site Icons -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">



		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Site CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="main-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="text-slid-box">
							<div id="offer-box" class="carouselTicker">
								<ul class="offer-box">
									<li>
										<i class="fab fa"></i>Hello <?php
																		$a=$_SESSION["studentname"];
																		$result_str = strtoupper($a); 
																		echo $result_str;
																	?>
									</li>
									<li>
										<i class="fab fa"></i> WILL COME TO ONLINE CANTEEN SYSTEM
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Main Top -->
		<header class="main-header">
			<!-- Start Navigation -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
				<div class="container">
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
						<a class="navbar-brand" href="index.html"><img src="images/logo5.png" class="logo" alt=""></a>
					</div>
					<!-- End Header Navigation -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="nav-item"><a class="nav-link" href="mainstudent.php">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="profilestudent.php">PROFILE</a></li>
							<li class="nav-item"><a class="nav-link" href="viewmashop.php">VIEW SHOPKEEPER</a></li>
							<li class="nav-item"><a class="nav-link" href="vieworder.php">VIEW ORDERS</a></li>
							<li class="nav-item"><a class="nav-link" href="feedstudent.php">FEEDBACK</a></li>
							<li class="nav-item"><a class="nav-link" href="passstudent.php">CHANGE PASSWORD</a></li>
							<li class="nav-item"><a class="nav-link" href="logoutstudent.php">LOGOUT</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->

				</div>
			</nav>
		</header>
	<?php
		$a="";
		$b="";
		$c="";
		$d="";
		$e="";
		$f="";
		$g="";
		$h="";
		$i="";
		$j="";
		$k="";
																
		if(isset($_GET['stid']))
		{
			$con=mysqli_connect("localhost","root","","canteen");
			
			$str="select * from student_reg where stid=".$_GET['stid'];
			$result=mysqli_query($con,$str);
			$r=mysqli_fetch_array($result);
			$a=$r['name'];
			$b=$r['address'];
			$c=$r['collegename'];
			$d=$r['department'];
			$e=$r['email'];
			$f=$r['mobileno'];
			$g=$r['username'];
			$h=$r['photo'];
			//$i=$r['statename'];
			//$j=$r['cityname'];
			$k=$r['gender'];
		}
	?>
	
		 <!-- Start All Title Box -->
		<div class="all-title-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Profile Update</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="main.php">Home</a></li>
							<li class="breadcrumb-item active"> Profile Update </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End All Title Box -->
		<div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
						<form  action= "<?php
												if(isset($_GET['stid']))
												{
													echo"editprostudent.php?stid=".$_GET['stid'];
												}
												else
												{
													echo"addstate.php";
								
												}
											?>" enctype="multipart/form-data" method="post">
							<h2>Profile Update:</h2>
							<br/>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="STUDENT NAME" value="<?php echo $a; ?>" name="s1" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="ADDRESS" rows="4" name="s2" required><?php echo $b; ?></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="COLLEGE NAME" value="<?php echo $c; ?>" name="s3" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="DEPARTMENT" name="s4" value="<?php echo $d; ?>" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="EMIAL"  name="s5" value="<?php echo $e; ?>" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="MOBILE NO." name="s6" value="<?php echo $f; ?>" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="CREATE USER NAME" name="s7" value="<?php echo $g; ?>" required>
									</div>
								</div>
								<label for="selector1"  class="col-sm-2 control-label">SELECT YOUR IMAGE :</label>
								<div class="col-md-12">
									<div class="form-group">
										<input type="file" class="form-control" id="name" name="image" required>
									</div>
								</div>
						
								<label for="selector1"  class="col-sm-2 control-label">State :</label>
											
								<div class="col-md-12">
									<div class="form-group">
										<select onChange="change_state()" class="form-control" name="s8" id="statedd"  >
											<option>Select State</option>
											<?php
												$con=mysqli_connect("localhost","root","","canteen");
												$str = "select * from statemaster";
												$result=mysqli_query($con,$str);
												while($row=mysqli_fetch_array($result))
												{
											?>
											<option value="<?php echo $row["stateid"]; ?>"><?php echo $row['statename']; ?></option>
											<?php
											
												}
											?>
										</select>
									</div>
								</div>
													
				
								<label for="selector1"  class="col-sm-2 control-label" >city :</label>
								<div class="col-md-12">
									<div class="form-group" id="city">
												
														
										<select class="form-control">
											<option >Seletct City</option>
										</select>
														
									</div>
								</div>
												
									
									
							</div>
							<div class="form-group">
								<div class="radio">
									<span class="help-block">GENDER :</span>&nbsp;&nbsp;&nbsp;
									<label>
										<input type="radio" name="gender" value="male" checked>
										 Male
									</label>
									<label>
										<input type="radio" name="gender" value="female">
										Female
									</label>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary " value="submit">
							</div>
										
						</form>
						<script type="text/javascript">
							function change_state()
							{
								var xmlhttp=new XMLHttpRequest();
								xmlhttp.open("GET","ajax.php?state="+document.getElementById("statedd").value,false);
								xmlhttp.send(null);
								document.getElementById("city").innerHTML=xmlhttp.responseText;
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	<footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Canteen Time</h3>
							<ul class="list-time">
								<li>Monday - Saturday: 08.00am to 05.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
		                
				<div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Online Canteen System</h4>
                            <p>Hello! we are the students from Bhagwan Mahavir Polytechnic. we have made a system for our college. Our system is for only for our college and other colleges of our campus.</p> 
							<p>The system is devloped for the student help purpose,student can reserved their food. As they have limited time for recess,and they can save their valuable time using the system</p>
							<p>THANK YOU</p>
                        </div>
                    </div>
				   
                   <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address:<a href=>BMEF Campus,Bharthana Road,Vesu,Surat,Gujarat,395017</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 8347849429">+91 8347849429</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:bmefcolleges@gmail.com">bmefcolleges@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
-        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">Online Canteen System</a> Design By :
            Ghanshyam,vatsal and Narendra</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>