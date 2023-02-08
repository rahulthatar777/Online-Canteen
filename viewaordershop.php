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
                        <p class="fa s_color">Click here to take your shop online ---> </p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="shoponline.php"><i class="fa s_color"></i>Click_Me</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="mainshop.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="profileshop.php">PROFILE</a></li>
						<li class="nav-item"><a class="nav-link" href="proupload.php">UPLOAD ITEM</a></li>
						<li class="nav-item active"><a class="nav-link" href="viewordershop.php">NEW ORDERS</a></li>
						<li class="nav-item"><a class="nav-link" href="lastorder.php">PREVIOUS ORDERS</a></li>
						<li class="nav-item"><a class="nav-link" href="feedshop.php">FEEDBACK</a></li>
                        <li class="nav-item"><a class="nav-link" href="passshop.php">CHANGE PASSWORD</a></li>
                        <li class="nav-item"><a class="nav-link" href="logoutshop.php">LOGOUT</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
			</div>
		</nav>

                
    </header>
	    <div class="all-title-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>View_Orders</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item">View_Orders</li>
							<li class="breadcrumb-item"><a href="viewordershop.php">Pending_Orders</a></li>
							<li class="breadcrumb-item"><a href="viewaordershop.php">Accepted_Orders</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<br/>
		<br/>
		<div class="cart-box-main">
        <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-all text-center">
						<h1>View_Accepted_Order</h1>
					</div>
				</div>
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
									<th>Food Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
									<th>Date</th>
                                    <th>Time</th>
                                    <th>Delivery Time</th>
									<th>Status</th>
									<th>Delivered</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php		
									$a=$_SESSION["s_id"];
									$p="Accept";
									$con=mysqli_connect("localhost","root","","canteen");
									$str = "select * from book_order
									inner join productupload on productupload.p_id= book_order.p_id where sid='$a' and status='$p'";
									//echo $str;
									$result=mysqli_query($con,$str);
									//echo("Error description: " . mysqli_error($con));
									while($row=mysqli_fetch_array($result))
									{
										$j=$row['orderid'];
										$e=$row['photo'];
										$b=$row['productname'];
										$c=$row['price'];
										$d=$row['description'];
										$g=$row['qty1'];
										$f=$row['price1'];
										$h=$row['ontime'];
										$t=$row['datetime'];
										$i=$row['payment'];
										?>
										<tr>
											<td class='thumbnail-img'>
												<img class="img-fluid" src="admin/<?php echo $e; ?>" alt="" />
											</td>
											<td class='name-pr'>
												<?php echo $b; ?>
											</td>
											<td class='name-pr'>
												<?php echo $d;?>
											</td>
											<td class='price-pr'>
												<?php echo $c; ?>
											</td>
											<td class='quantity-box'>
												<?php echo $g; ?>
											</td>
											<td class='total-pr'>
												<?php echo $f; ?>
											</td>
											<td class='name-pr'>
												<?php echo date("d-M-y",strtotime($t)); ?>
											</td>
											<td class='name-pr'>
												<?php echo date("h:i:sa",strtotime($t)); ?>
											</td>
											<td class='name-pr'>
												<?php echo date("h:i:sa",strtotime($h));?>
											</td>
											<td class='total-pr'>
												<?php echo $i; ?>
											</td>
											<td class='total-pr'>
												<a href="proitem.php?orderid=<?php echo $j; ?>" class=" btn hvr-hover">Delivered</a>
											</td>
										</tr>
									<?php } ?>
							</tbody>
                        </table>
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