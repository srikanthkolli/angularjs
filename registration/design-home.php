<?php
session_start();
include("session-check.php");
exit;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
  <link rel="stylesheet" type="text/css" href="home.css">
  
 </HEAD>

 <BODY  style="margin:0;padding:0;">
  <form method="POST" action="" id="form">
	<div class="header">
		<div class="header1">
			<div>
				<div class="header2">Questions App
				</div>
			</div>
		</div>
		<div class="header3">
			<div class="header4">
				<input type="button" value="Logged in as admin@shenll.net" style="height:40px;background-color:#3399FF;">
			<div class="header5">
				<input type="button" value="Logout" style="height:40px;background-color:#3399FF;" onclick="location.href('logout.php');">
			</div>
			</div>
		</div>
		<div class="con">
			<div class="con1">
				<div style="margin-left:10px;">
					<img src="imgins/logo1.png">
				</div>
			</div>
			<div class="con2">
				<div style="margin-top:3px;margin-left:20px;font-family:SWANSE__;"><a href="#">Home</a>
				</div>
			</div>
			<div class="con3">
				<div style="margin-left:10px;">
					<img src="imgins/logo2.png">
				</div>
			</div>
			<div class="con4">
				<div style="margin-top:3px;margin-left:20px;font-family:SWANSE__;"><a href="categries.php">Manage Categories</a>
				</div>
			</div>
			<div class="con5">
				<div style="margin-left:10px;">
					<img src="imgins/logo3.png">
				</div>
			</div>
			<div class="con6">
				<div style="margin-top:3px;margin-left:15px;font-family:SWANSE__;"><a href="sub.php">Manage Sub Category</a>
				</div>
			</div>
			<div class="con7">
				<div style="margin-left:10px;">
					<img src="imgins/logo4.png">
				</div>
			</div>
			<div class="con8">
				<div style="margin-top:3px;margin-left:20px;font-family:SWANSE__;"><a href="questions.php">Manage Questions</a>
				</div>
			</div>
		</div>
		<div style="float:left;margin-left:200px;margin-top:200px;font-family:SWANSE__;">Welcome to admin control panel
		</div>
		<div class="footer">
			<div class="footer1">© Copyright 2013 Questions app.
			</div>
		</div>
	</div>
  </form>
 </BODY>
</HTML>