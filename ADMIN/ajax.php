<?php
	$con = mysqli_connect ("localhost","root","","canteen");
	$t=$_GET["state"];
	
	if($state != "")
	{
		$result=mysqli_query("select * from city where stateid=$t");
	
		echo "<select>"
			while($row=mysqli_fetch_array($result))
			{
				echo "<option>"; echo $row["cityname"]; echo "</option>";
			}		
	
	
	
		echo "</select>"
	}
?>