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
	<body>
		<div class="clearfix"></div>
			<div class="inner_content">
				<div class="inner_content_w3_agile_info two_in">
					<h2 class="w3_inner_tittle">Approve_SHOPKEEPER</h2>
					<div class="form-body">
						<div class="agile-tables">
							<div class="w3l-table-info agile_info_shadow">
								<?php 
										$a=$_GET['s_id'];
										echo "<form class='form-horizontal' action='appshop.php?s_id=$a' method='post'> ";
										$con=mysqli_connect("localhost","root","","canteen");
										
										$str = "select * from shopkeeper_reg 
										inner join statemaster on statemaster.stateid= shopkeeper_reg.state
										inner join city on city.cityid= shopkeeper_reg.city where s_id ='$a' ";
										$result=mysqli_query($con,$str);
										//echo("Error description: " . mysqli_error($con));
										$row=mysqli_fetch_array($result);
										echo "<center><table id='table'>";
										echo "<thead>";
										echo "<tr>";
										echo "<th colspan='2'><center><img src=".$row['image']."></center></th>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>OWNER_NAME :</th>";
										echo "<td>".$row['ownername']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>SHOP_NAME :</th>";
										echo "<td>".$row['ownername']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>ADDRESS :</th>";
										echo "<td>".$row['address']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>STATE :</th>";
										echo "<td>".$row['statename']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>CITY :</th>";
										echo "<td>".$row['cityname']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>MOBILE :</th>";
										echo "<td>".$row['mobileno']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>USER_NAME :</th>";
										echo "<td>".$row['username']."</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<th>PASSWORD :</th>";
										echo "<td>".$row['password']."</td>";
										echo "</tr>";
									?>
									<tr>
									<div class="form-group">
									<th>
										<div class="radio">
											<label>
												<input type="radio" name="a1" value="app">APPROVAL
											</label>
										</div>
									</th>
									<th>
										<div class="radio">
											<label>
												<input type="radio" name="a1" value="rej">REJECT
											</label>
										</div>
									</th>
									</div>
									</tr>
									<tr>
										<th>
											<center><button type="submit" class="btn btn-default" value="submit">SUBMIT</button></center> 
										</th>
									</tr>
									</thead>
								</table></center>
								</form>
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