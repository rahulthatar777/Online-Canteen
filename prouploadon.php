<?php
	session_start();
	
	if($_SESSION["s_id"] && $_SESSION["shopname"] ) 
	{
		$a=$_SESSION["shopname"];
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
					<div class="right-phone-box">
                        <p class="fa s_color">Click here to take your shop offline ---> </p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="shopoffline.php"><i class="fa s_color"></i>Click_Me</a></li>
                        </ul>
                    </div>
				</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa"></i>Hello <?php
																	$a=$_SESSION["shopname"];
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
                        <li class="nav-item"><a class="nav-link" href="mainshopon.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="profileshopon.php">PROFILE</a></li>
						<li class="nav-item active"><a class="nav-link" href="proupload.php">UPLOAD ITEM</a></li>
						<li class="nav-item"><a class="nav-link" href="viewordershopon.php">NEW ORDERS</a></li>
						<li class="nav-item"><a class="nav-link" href="lastordderon.php">PREVIOUS ORDERS</a></li>
						<li class="nav-item"><a class="nav-link" href="feedshopon.php">FEEDBACK</a></li>
                        <li class="nav-item"><a class="nav-link" href="passshopon.php">CHANGE PASSWORD</a></li>
                        <li class="nav-item"><a class="nav-link" href="logoutshop.php">LOGOUT</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                
    </header>
   
   <div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>PRODUCT UPLOAD</h2>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="mainshop.php">Home</a></li>
						<li class="breadcrumb-item active"> PRODUCT UPLOAD </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-box-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="contact-form-right">
						<form  action= "addproducton.php" enctype="multipart/form-data" method="post">
							<h2>FILL DETAILS OF PRODUCT:</h2>
							<br/>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="PRODUCT NAME" name="p1" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<select onChange="change_cat()" class="form-control" name="p2" id="cat"  >
											<option>Seletct Category Of Food</option>
											<?php
												$con=mysqli_connect("localhost","root","","canteen");
												$str = "select * from category";
												$result=mysqli_query($con,$str);
												while($row=mysqli_fetch_array($result))
												{
											?>
											<option value="<?php echo $row["cid"]; ?>"><?php echo $row['catname']; ?></option>
											<?php	
												}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										
										<div id="subcat">
															
											<select class="form-control">
												<option >Seletct Subcategory Of Food</option>
											</select>
															
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-3">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="Quenty" name="p4" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Description Of Food" rows="4" name="p5" required></textarea>
									</div>
								</div>
								<div class="col-md-12 col-lg-3">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="₹ Price" name="p6" required>
									</div>
								</div>
								
								<div class="col-md-12">
									<label for="selector1"  class="col-sm-5 control-label">SELECT YOUR PRODUCT IMAGE :</label>
									<div class="form-group">
										<input type="file" class="form-control" id="name" name="image" required>
									</div>
								</div>
							</div>
							<div class="form-group" align="center">
								<input type="submit" class="btn btn-primary " value="submit">
							</div>
						</form>
						<script type="text/javascript">
							function change_cat()
							{
								var xmlhttp=new XMLHttpRequest();
								xmlhttp.open("GET","ajax1.php?cat1="+document.getElementById("cat").value,false);
								xmlhttp.send(null);
								document.getElementById("subcat").innerHTML=xmlhttp.responseText;
							}
						</script>
					</div>
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