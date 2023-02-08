<?php
include 'header.php';
?>
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

<br/>
<br/>
<br/>

<body>
	<div>
															<?php
																$a="";
																
																if(isset($_GET['stateid']))
																{
																	$con=mysqli_connect("localhost","root","","canteen");
																	$str="select * from statemaster where stateid=".$_GET['stateid'];
																	$result=mysqli_query($con,$str);
																	$r=mysqli_fetch_array($result);
																	$a=$r['statename'];
																}
															?>

													<div class="wthree_general graph-form agile_info_shadow ">
														<h2 class="w3_inner_tittle">STATES:</h2>

														<div class="grid-1 ">
															<div class="form-body">
															
															
																<form class="form-horizontal" action="<?php
																											if(isset($_GET['stateid']))
																											{
																												echo"editstate.php?stateid=".$_GET['stateid'];
																											}
																											else
																											{
																												echo"addstate.php";
								
																											}
																											?>" method="post">												
																	<div class="form-group">
																		<label for="stateid" class="col-sm-2 control-label">State :</label>
																		<div class="col-sm-8">
																			<input type=textbox name="st1" id="stateid" class="form-control1" value="<?php echo $a; ?>" >
																					
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
																									<th>STATE_ID</th>
																									<th>STATE_NAME</th>
																									<th>EDIT</th>
																									<th>DELETE</th>
																								</tr>
																							</thead>
																							<?php 
																								$con=mysqli_connect("localhost","root","","canteen");
																								$str = "select * from statemaster";
																								$result=mysqli_query($con,$str);
																								while($row=mysqli_fetch_array($result))
																								{
																									echo "<tbody>";
																									echo "<tr>";
																									echo "<td>".$row['stateid']."</td>";
																									echo "<td>".$row['statename']."</td>";
																									echo "<td><a href='staten.php?stateid=".$row['stateid']."'>EDIT</a></td>";
																									echo "<td><a href='deletestate.php?stateid=".$row['stateid']."'>DELETE</a></td>";
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
		
		</div>
	</div>
</body>
</html>

</body>
</html>
<?php
include 'footer.php';
?>