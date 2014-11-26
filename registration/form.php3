<?php
	print_r($_POST["first"]);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <form action="" method="POST">
	Firstname:<input type="text" name="first"><br>
	Address:<textarea rows="4" cols="15" name="address"></textarea><br>
	State:<select name="state">
				<option>select</option>
				<option>India</option>
				<option>Usa</option>
				<option>Uk</option>
		  </select><br>
	File:<input type="file" name="file"><br>
	<input type="submit">
  </form>
 </BODY>
</HTML>