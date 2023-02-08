<?php
include 'header.php';
?>

<br/>
<br/>
<br/>
<html>
	<head>
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
		<?php
			$a="";
			$b="";
			if(isset($_GET['cid']))
			{
				$con=mysqli_connect("localhost","root","","canteen");
				$str="select * from category where cid=".$_GET['cid'];
				$result=mysqli_query($con,$str);
				$r=mysqli_fetch_array($result);
				$a=$r['catname'];
			}
		?>

		<div class="wthree_general graph-form agile_info_shadow ">
														<h3 class="w3_inner_tittle two">CATEGORY</h3>

														<div class="grid-1 ">
															<div class="form-body">
																<form class="form-horizontal" action="
																<?php
																	if(isset($_GET['cid']))
																	{
																		echo"editcat.php?cid=".$_GET['cid'];
																	}
																	else
																	{
																		echo"addcat.php";
								
																	}
																?>" method="Post">												
																	<div class="form-group">
																		<label for="selector1" class="col-sm-2 control-label">Category :</label>
																		<div class="col-sm-8">
																			<input type=textbox name="c1" id="selector1" class="form-control1" value="<?php echo $a; ?>">
																					
																		</div>
																	</div>
																									
																										
																	<br/>
																	<br/>
																	<center><button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp; 
																										
																										
																	<button type="submit" class="btn btn-default">Cancel</button></center> 
																										
																</form>
																<div class="clearfix"></div>
			
																		<div class="inner_content">
																			<div class="inner_content_w3_agile_info two_in">
																				<div class="agile-tables">
																					<div class="w3l-table-info agile_info_shadow">
																						<table id="table">
																							<thead>
																								<tr>
																									<th>ID</th>
																									<th>CATEGORY Name</th>
																									<th>EDIT</th>
																									<th>DELETE</th>
																								</tr>
																							</thead>
																								<?php 
																									$con=mysqli_connect("localhost","root","","canteen");
																									$str = "select * from category";
																									$result=mysqli_query($con,$str);
																									while($row=mysqli_fetch_array($result))
																									{
																										echo "<tbody>";
																										echo "<tr>";
																										echo "<td>".$row['cid']."</td>";
																										echo "<td>".$row['catname']."</td>";
																										
																										echo "<td><a href='cat.php?cid=".$row['cid']."'>EDIT</a></td>";
																										echo "<td><a href='deletecat.php?cid=".$row['cid']."'>DELETE</a></td>";
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

		</div>
	</body>
</html>
</div>
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