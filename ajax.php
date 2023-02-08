<?php
	$con = mysqli_connect ("localhost","root","","canteen");
	$t=$_GET["state"];
	
	if($t != "")
	{
		$str="select * from city where stateid=$t";
		$result=mysqli_query($con,$str);
		
		

		echo "<select name='s10' class='form-control'>";
			while($row=mysqli_fetch_array($result))
			{
				echo "<option value='".$row['cityid']."'>".$row['cityname']."</option>";
			}		
	
	
	
		echo "</select>";
	}

?>