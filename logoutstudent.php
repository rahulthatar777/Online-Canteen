<?php

	session_start();
	
	unset($_SESSION["stid"]);
	unset($_SESSION["studentname"]);
	
	header("Location:login.php");
	
?>
