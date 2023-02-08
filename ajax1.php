<?php
	$con = mysqli_connect ("localhost","root","","canteen");
	$t=$_GET["cat1"];
	
	if($t != "")
	{
		$str="select * from subcategory where catid=$t";
		$result=mysqli_query($con,$str);
		
		

		echo "<select name='p3' class='form-control'>";
			while($row=mysqli_fetch_array($result))
			{
				echo "<option value='".$row['subcatid']."'>".$row['subcatname']."</option>";
			}		
	
	
	
		echo "</select>";
	}

?>