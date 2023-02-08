<?php
	session_start();
	
	if($_SESSION["admin"]) 
	{
	}
	else
	{
		header("location:adminn.php");
	}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Online Canteen System</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  	<!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
							<li>
								<a href="home.php"> <i class="fa fa-tachometer"></i> Home</a>
							</li>
							<li>
								<i class="fa fa-cogs" aria-hidden="true"></i> MASTERS <i class="fa fa-angle-down" aria-hidden="true"></i>
								<ul class="gn-submenu">
									<li class="mini_list_agile"><a href="staten.php"><i class="fa fa-caret-right" aria-hidden="true"></i> State </a></li>
									<li class="mini_list_w3"><a href="Cityn.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> City</a></li>
								</ul>
							</li>
								<li>
									<i class="fa fa-cogs" aria-hidden="true"></i> Forms <i class="fa fa-angle-down" aria-hidden="true"></i> 
									
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="cat.php"><i class="fa fa-caret-right" aria-hidden="true"></i> CATEGORY </a></li>
										<li class="mini_list_w3"><a href="subcat.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> SUB-CATEGORY </a></li>
									</ul>
								</li>
								<li><i class="fa fa-list" aria-hidden="true"></i>SHOPKEEPER VIEW<i class="fa fa-angle-down" aria-hidden="true"> </i>
								     <ul class="gn-submenu">
										<li class="mini_list_agile"><a href="pendingshop.php"><i class="fa fa-caret-right" aria-hidden="true"></i>SHOPKEEPER PENDING</a></li>
										<li class="mini_list_agile"><a href="apshop.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>SHOPKEEPER APPROVED</a></li>
										<li class="mini_list_agile"><a href="rejshop.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>SHOPKEEPER REJECTED</a></li>
									 </ul>
								</li>
								<li><i class="fa fa-list" aria-hidden="true"></i>Reports <i class="fa fa-angle-down" aria-hidden="true"> </i> 
								     <ul class="gn-submenu">
										<li class="mini_list_agile"><a href="studentview.php"><i class="fa fa-caret-right" aria-hidden="true"></i> View Students</a></li>
										<li class="mini_list_agile"><a href="viewodr.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Orders</a></li>
										<li><a href="viewfeedbk.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Feedback</a></li>
										<li><a href="viewcont.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Contact</a></li>
									 </ul>
								</li>
								
								<li><a href="adminlogout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
												</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i> ONLINE CANTEEN SYSTEM </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/adim.jpg" alt=""> </span> 
											</div>	
										
									</li>
									
						</ul>
				</li>
				
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>