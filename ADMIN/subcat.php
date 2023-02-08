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
		<div>
			<?php
				$a="";
				$b="";
				if(isset($_GET['subcatid']))
				{
					$con=mysqli_connect("localhost","root","","canteen");
					$str="select * from subcategory where subcatid=".$_GET['subcatid'];
					$result=mysqli_query($con,$str);
					$r=mysqli_fetch_array($result);
					$a=$r['catid'];
					$b=$r['subcatname'];;
				}
			?>
			<div class="wthree_general graph-form agile_info_shadow ">
								<h3 class="w3_inner_tittle two">SUB-CATEGORY</h3>

								<div class="grid-1 ">
									<div class="form-body">
										<form class="form-horizontal" action="
																				<?php
																					if(isset($_GET['subcatid']))
																					{
																						echo"editsubcat.php?subcatid=".$_GET['subcatid'];
																					}
																					else
																					{
																						echo"addsubcat.php";
																					}
																				?>" method="post">
											<div class="form-group">
												<label for="selector1" class="col-sm-2 control-label">Category :</label>
												<div class="col-sm-8">
													<select name="sct1" id="selector1" class="form-control1">
														<option>Select CATEGORY</option>
															<?php
																$con=mysqli_connect("localhost","root","","canteen");
																$str = "select * from category";
																$result=mysqli_query($con,$str);
																while($row=mysqli_fetch_array($result))
																{
															
																	echo "<option value='".$row['cid']."'>".$row['catname']."</option>";
																}
															?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="smallinput" class="col-sm-2 control-label label-input-sm">Sub-Category </label>
												<div class="col-sm-8">
													<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Sub-Category" name="sct2" value="<?php echo $b; ?>">
												</div>
											</div>
											<br/>
											<br/>
											<center>
												<button type="submit" class="btn btn-default" >Submit</button>&nbsp;&nbsp; 
												<button type="submit" class="btn btn-default">Cancel</button>
											</center> 
										</form>
										<br/>
										<br/>
										<div class="clearfix"></div>
							<div class="inner_content">
								<div class="inner_content_w3_agile_info two_in">
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
											<table id="table">
												<thead>
													<tr>
														<th>CITY_ID</th>
														<th>STATE_ID</th>
														<th>CITY_NAME</th>
														<th>EDIT</th>
														<th>DELETE</th>
													</tr>
												</thead>
													<?php 
														$con=mysqli_connect("localhost","root","","canteen");
														$str = "select * from subcategory
														inner join category on category.cid= subcategory.catid";
														$result=mysqli_query($con,$str);
														while($row=mysqli_fetch_array($result))
														{
															echo "<tbody>";
															echo "<tr>";
															echo "<td>".$row['subcatid']."</td>";
															echo "<td>".$row['catname']."</td>";
															echo "<td>".$row['subcatname']."</td>";
															echo "<td><a href='subcat.php?subcatid=".$row['subcatid']."'>EDIT</a></td>";
															echo "<td><a href='deletesubcat.php?subcatid=".$row['subcatid']."'>DELETE</a></td>";
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