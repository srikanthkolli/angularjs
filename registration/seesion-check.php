
<?php

if(!isset($_SESSION["name"]) || $_SESSION["name"]=='')
{
	header("Location:design_admin.php");
	exit;
}
?>