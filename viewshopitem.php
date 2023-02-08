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
							<li class="nav-item"><a class="nav-link" href="profilestudent.php">PROFILE</a></li>
							<li class="nav-item active"><a class="nav-link" href="viewmashop.php">VIEW SHOPKEEPER</a></li>
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
	   
		<br/>
		<br/>

		<div class="products-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-all text-center">
							<h1>Hot & Spicy Foods</h1>
						</div>
					</div>
				</div>
				<div class="row special-list">
					<?php		
						$con=mysqli_connect("localhost","root","","canteen");
						$d= "on";
						$t= $_GET['s_id'];
						$str = "select * from productupload
						inner join shopkeeper_reg on shopkeeper_reg.s_id= productupload.s_id1 where s_id='$t' and on_status='$d'";
						$result=mysqli_query($con,$str);
						//echo("Error description: " . mysqli_error($con));
						while($row=mysqli_fetch_array($result))
						{
							$a=$row['photo'];
							$b=$row['productname'];
							$c=$row['price'];
							$e=$row['p_id'];
							echo '<div class="col-lg-3 col-md-6 special-grid best-seller">';
							echo '<div class="products-single fix">';
							echo '<div class="box-img-hover">';?>
							<img src="admin/<?php echo $a; ?>" class="img-fluid" alt="Image"><?php
							echo '<div class="mask-icon">';
							echo '<a class="cart" href="buyitem.php?p_id='.$e.'">BUY NOW</a>';
							echo '</div>';
							echo '</div>';
							echo '<div class="why-text">';
							echo "<h4>$b</h4>";
							echo "<h5>₹ $c</h5>";
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>

		<br/>
		<br/>

		<footer>
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="footer-top-box">
								<h3>Business Time</h3>
								<ul class="list-time">
									<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="footer-top-box">
								<h3>Newsletter</h3>
								<form class="newsletter-box">
									<div class="form-group">
										<input class="" type="email" name="Email" placeholder="Email Address*" />
										<i class="fa fa-envelope"></i>
									</div>
									<button class="btn hvr-hover" type="submit">Submit</button>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="footer-top-box">
								<h3>Social Media</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<ul>
									<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="footer-widget">
								<h4>About Freshshop</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="footer-link">
								<h4>Information</h4>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Customer Service</a></li>
									<li><a href="#">Our Sitemap</a></li>
									<li><a href="#">Terms &amp; Conditions</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Delivery Information</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="footer-link-contact">
								<h4>Contact Us</h4>
								<ul>
									<li>
										<p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
									</li>
									<li>
										<p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
									</li>
									<li>
										<p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
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
			<p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
				<a href="https://html.design/">PHP design</a></p>
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