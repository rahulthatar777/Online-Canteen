<?php

	session_start();
	
	unset($_SESSION["s_id"]);
	unset($_SESSION["shopname"]);
	
	header("Location:login.php");
	
?>
	