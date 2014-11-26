<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: design_admin.php");
	exit;
?>