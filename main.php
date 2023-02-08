<?php
	include 'header.php';
?>
		<div class="products-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-all text-center">
							<h1>Hot & Spicy Foods</h1>
						</div>
					</div>
				</div>
				<div class="row special-list">
					<?php		
						$con=mysqli_connect("localhost","root","","canteen");
						$d= "on";
						$str = "select * from productupload
						inner join shopkeeper_reg on shopkeeper_reg.s_id= productupload.s_id1 where on_status='$d'";
						$result=mysqli_query($con,$str);
						while($row=mysqli_fetch_array($result))
						{
							$a=$row['photo'];
							$b=$row['productname'];
							$c=$row['price'];
							$e=$row['p_id'];
							echo '<div class="col-lg-3 col-md-6 special-grid best-seller">';
							echo '<div class="products-single fix">';
							echo '<div class="box-img-hover">';?>
							<img src="admin/<?php echo $a; ?>" class="img-fluid" alt="Image"><?php
							echo '<div class="mask-icon">';
							echo '<a class="cart" href="login.php">BUY NOW</a>';
							echo '</div>';
							echo '</div>';
							echo '<div class="why-text">';
							echo "<h4>$b</h4>";
							echo "<h5>₹ $c</h5>";
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
<?php
	include 'footer1.php';
?>