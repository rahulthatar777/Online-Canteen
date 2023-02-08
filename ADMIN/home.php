<?php

	include 'header.php';

?>
<br/>
<br/>
<br/>
<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   <div class="agile_top_w3_grids">
					          <ul class="ca-menu">
									<?php 
										$i='0';
										$con=mysqli_connect("localhost","root","","canteen");
										$str = "select * from student_reg ";
										$result=mysqli_query($con,$str);
										while($row=mysqli_fetch_array($result))
										{
											$i= $i+1;
										}
									?>
									<li>
										<a href="#">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"><?php echo $i; ?></h4>
												<h3 class="ca-sub three">Total Students</h3>
											</div>
										</a>
									</li>
									<?php 
										$o='0';
										$con=mysqli_connect("localhost","root","","canteen");
										$s = "select * from productupload ";
										$re=mysqli_query($con,$s);
										while($row=mysqli_fetch_array($re))
										{
											$o= $o+1;
										}
									?>
									<li>
										<a href="#">
											<i class="fa fa-database" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two"><?php echo $o; ?></h4>
												<h3 class="ca-sub two">Products</h3>
											</div>
										</a>
									</li>
									<?php 
										$t='0';
										$con=mysqli_connect("localhost","root","","canteen");
										$st = "select * from shopkeeper_reg ";
										$res=mysqli_query($con,$st);
										while($row=mysqli_fetch_array($res))
										{
											$t= $t+1;
										}
									?>
									<li>
										<a href="#">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"><?php echo $t; ?></h4>
												<h3 class="ca-sub one">Total Shop</h3>
											</div>
										</a>
									</li>
									<div class="clearfix"></div>
								</ul>
					   </div>
					 <!-- //agile_top_w3_grids-->
						<!-- /agile_top_w3_post_sections-->
							<div class="agile_top_w3_post_sections">
							       <div class="col-md-6 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle">Latest Report</h3>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">65,800,587 </h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">20 </p><span class="year">This Year</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">2,690 </h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">40 </p><span class="year">This Month</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">24,660 </h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">30 </p><span class="year">This Week</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">1,204</h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">10 </p><span class="year">This Day</span></div>
													<div class="clearfix"></div>
												</div>
											  
											</div>
									   </div>
									    <div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
										    <div class="img_wthee_post1">
											<h3 class="w3_inner_tittle"> Flip Clock</h3>
										       	<div class="main-example">
													<div class="clock"></div>
													<div class="message"></div>

												</div>
											</div>
							            </div>
								       <div class="clearfix"></div>
							     </div>
								   
						<!-- //agile_top_w3_post_sections-->
							<!-- /w3ls_agile_circle_progress-->
							
									
								
							</div>
						<!-- /w3ls_agile_circle_progress-->
						<!-- /chart_agile-->
						 
						  <!-- /w3ls_agile_circle_progress-->
							

							  
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
				<?php

					include 'pdadmin.php';

				?>	
<br/>
<br/>
<br/>
<?php

include 'footer.php';

?>