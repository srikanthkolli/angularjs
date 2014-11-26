<?php
	if(!isset($_SESSION["name"]) || $_SESSION["name"]=='')
	{
		header("location:design_admin.php");
		exit;
	}
?>