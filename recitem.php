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
	<script>
		function calc() 
		{
			var price = document.getElementById("ticket_price").innerHTML;
			var noTickets = document.getElementById("num").value;
			var total = parseFloat(price) * noTickets
			if (!isNaN(total))
			{
				document.getElementById("total").innerHTML = total;
				document.getElementById("the").innerHTML = total
			}
		}
	</script>

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
							<li class="nav-item active"><a class="nav-link" href="mainstudent.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="profilestudent.php">PROFILE</a></li>
							<li class="nav-item"><a class="nav-link" href="viewmashop.php">VIEW SHOPKEEPER</a></li>
							<li class="nav-item"><a class="nav-link" href="vieworder.php">VIEW ORDERS</a></li>
							<li class="nav-item"><a class="nav-link" href="feedstudent.php">FEEDBACK</a></li>
							<li class="nav-item"><a class="nav-link" href="passstudent.php">CHANGE PASSWORD</a></li>
							<li class="nav-item"><a class="nav-link" href="logoutstudent.php">LOGOUT</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->

					
		</header>
	    <div class="all-title-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Shop Detail</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Shop</a></li>
							<li class="breadcrumb-item active">PLACE_ORDER</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<div class="cart-box-main">
        <div class="container">
            <div class="row">
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
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php		
									$con=mysqli_connect("localhost","root","","canteen");
									$str = "select * from productupload
									inner join shopkeeper_reg on shopkeeper_reg.s_id= productupload.s_id1 where p_id=".$_GET['p_id'];
									$result=mysqli_query($con,$str);
									$row=mysqli_fetch_array($result);
									$a=$row['photo'];
									$b=$row['productname'];
									$c=$row['price'];
									$d=$row['description'];
									$t=$_GET['p_id'];
									echo'<form  action= "precitem.php?p_id='.$t.'" method="post">';
									echo "<tr>";
										echo "<td class='thumbnail-img'>";?>
												<img class="img-fluid" src="admin/<?php echo $a; ?>" alt="" /><?php
											echo "</a>";
										echo "</td>";
										echo "<td class='name-pr'>";
												echo $b;
											echo "</a>";
										echo "</td>";
										echo "<td class='name-pr'>";
												echo $d;
											echo "</a>";
										echo "</td>";
										echo "<td class='price-pr'>";
											echo "<p>₹ <span id='ticket_price'>$c</span></p>";
										echo "</td>";
										$e=$_POST["b1"];
										echo "<td class='quantity-box'>";?><input type="number" size="4" value="<?php echo $e; ?>" min="1" name="p1" step="1" id="num" class="c-input-text qty text" oninput="calc()"><?php echo"</td>";
										echo "<td class='total-pr'>";
											$u=$c*$e;
											echo "<p>₹ <span id='total'>$u</span></p>";
										echo "</td>";
									echo "</tr>";
                            echo "</tbody>";
                        echo "</table>";
                    echo '</div>';
                echo '</div>';
            echo '</div>';
			
            echo '<div class="row my-5">';
                echo '<div class="col-lg-8 col-sm-12"></div>';
                echo '<div class="col-lg-4 col-sm-12">';
                    echo '<div class="order-box">';
                        echo "<h3>Order summary</h3>";
                        echo '<div class="d-flex gr-total">';
                            echo "<h5>Grand Total</h5>";
                            echo '<div class="ml-auto h5">';  
								echo "<p>₹ <span id='the'>$u</span>";  
							echo '</div>';
                        echo '</div>';
						?>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Current Time:</h4>
                            <div class="ml-auto font-weight-bold">
								<?php
									date_default_timezone_set('Asia/Kolkata');
									echo date("H:i",time()); 
								?>
							</div>
                        </div>
                        <div class="d-flex">
                            <h4>Delivery Time:</h4>
                            <div class="ml-auto font-weight-bold"> 
								<?php
									date_default_timezone_set('Asia/Kolkata');
									$timestamp = time() + 60*60;
									
									$time = date('H:i',$timestamp);
									echo $time;
								?> 
							</div>
                        </div>
					</div>
                </div>
                <div class="col-12 d-flex shopping-box">
					<input type="submit" class="ml-auto btn btn-primary " value="Place Order">
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