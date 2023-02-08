<?php
	include 'header.php';
?>

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
		<div class="wthree_agile_admin_info">
			<div class="clearfix"></div>
				<div class="inner_content">
					<div class="inner_content_w3_agile_info two_in">
						<h2 class="w3_inner_tittle">VIEW_ALL_ORDERS</h2>
						<div class="agile-tables">
							<div class="w3l-table-info agile_info_shadow">
								<table id="table">
									<thead>
										<tr>
											<th style="align:center;">ORDER_ID</th>
											<th>PRODUCT_NAME</th>
											<th>Shop_NAME</th>
											<th>STUDENT_NAME</th>
											<th>PRICE_OF_PRODUCT</th>
											<th>QUANTITY</th>
											<th>TOTAL_PRICE</th>
											<th>STATUS</th>
											<th>PAYMENT</th>
										</tr>
									</thead>
									<?php 
										$con=mysqli_connect("localhost","root","","canteen");
										$str = "select * from book_order 
										inner join productupload on productupload.p_id= book_order.p_id
										inner join shopkeeper_reg on shopkeeper_reg.s_id= book_order.sid
										inner join student_reg on student_reg.stid= book_order.stid ";
										$result=mysqli_query($con,$str);
										//echo $str;
										//echo("Error description: " . mysqli_error($con));
										while($row=mysqli_fetch_array($result))
										{
											echo "<tbody>";
											echo "<tr>";
											echo "<td align='center'>".$row['orderid']."</td>";
											echo "<td align='center'>".$row['productname']."</td>";
											echo "<td align='center'>".$row['shopname']."</td>";
											echo "<td align='center'>".$row['name']."</td>";
											echo "<td align='center'>".$row['price']."</td>";
											echo "<td align='center'>".$row['qty1']."</td>";
											echo "<td align='center'>".$row['price1']."</td>";
											echo "<td align='center'>".$row['status']."</td>";
											echo "<td align='center'>".$row['payment']."</td>";
											echo "</tr>";
											echo "</tbody>";
										}
									?>
								</table>
							</div>
						</div>
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