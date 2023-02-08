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


<html>
	<head>
		<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Tables  :: w3layouts</title>
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/table-style.css" />
		<link rel="stylesheet" type="text/css" href="css/basictable.css" />
		<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	</head>
	<body>
		<div class="clearfix"></div>
			<div class="inner_content">
				<div class="inner_content_w3_agile_info two_in">
					<h2 class="w3_inner_tittle">REJECTD_SHOPKEEPER</h2>
					<div class="agile-tables">
						<div class="w3l-table-info agile_info_shadow">
							<table id="table">
								<thead>
									<tr>
										<th style="align:center;">STUDENT_ID</th>
										<th>SHOP_NAME</th>
										<th>OWNER_NAME</th>
										<th>ADDRESS</th>
										<th>STATE</th>
										<th>CITY</th>
										<th>MOBILE_NO.</th>
										<th>EMIAL</th>
										<th>USER_NAME</th>
										<th>PASSWORD</th>
										<!--<th>IMAGE</th>-->
										<th>EDIT</th>
									</tr>
								</thead>
								<?php 
									$con=mysqli_connect("localhost","root","","canteen");
									$d= "Reject";
									$str = "select * from shopkeeper_reg
									inner join statemaster on statemaster.stateid= shopkeeper_reg.state
									inner join city on city.cityid= shopkeeper_reg.city where status='$d' ";
									$result=mysqli_query($con,$str);
									while($row=mysqli_fetch_array($result))
									{
										echo "<tbody>";
										echo "<tr>";
										echo "<td>".$row['s_id']."</td>";
										echo "<td>".$row['shopname']."</td>";
										echo "<td>".$row['ownername']."</td>";
										echo "<td>".$row['address']."</td>";
										echo "<td>".$row['cityname']."</td>";
										echo "<td>".$row['statename']."</td>";
										echo "<td>".$row['mobileno']."</td>";
										echo "<td>".$row['email']."</td>";
										echo "<td>".$row['username']."</td>";
										echo "<td>".$row['password']."</td>";
										//echo "<td ><img src=".$row['image']."></td>";
										echo "<td><a href='statusshop.php?s_id=".$row['s_id']."'>EDIT</a></td>";
										echo "</tr>";
										echo "</tbody>";
									}
								?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>







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