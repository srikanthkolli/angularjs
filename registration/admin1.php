<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	if(isset($_POST["user"]))
		{
		$used=$_POST["user"];
		$passw=$_POST["pass"];
		
		

		$sql="select * from tbl_adminner";
		$getrow=mysql_query($sql);
		if(mysql_num_rows($getrow)){
			$getr=mysql_fetch_array($getrow);
			$us=$get["username"];
			$pa=$get["password"];
			$id=$get["id"];
			header("location:adminner.php");
		}
		else{
			echo "incurrect";
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
  <script>
	function function1(){
		var a=document.getElementById("user").value;
		var b=document.getElementById("pass").value;
		if(a==""){
			alert("please enter name");
			document.getElementById("user").focus();
			return;
		}
		if(b==""){
			alert("please enter password");
			document.getElementById("pass").focus();
			return;
		}
		document.getElementById("form").submit();
	}
  </script>
 </HEAD>

 <BODY>
  <form method="POST" action="" id="form">
	<div style="border:1 px solid red;background-color:#8C8C8C;width:30%;height:150px;margin:auto;">
		<table border="0" cellspacing="0" cellpadding="5" width="100%">
			<tr>
				<th colspan="2">LOGIN PAGE</th>
			</tr>
			<tr>
				<td>USERNAME:</td>
				<td>
					<input type="text" id="user" name="user">
				</td>
			</tr>
			<tr>
				<td>PASSWORD:</td>
				<td>
					<input type="password" id="pass" name="pass">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="button" value="submit" onclick="function1()">
				</td>
			</tr>
		</table>
	</div>
  </form>
 </BODY>
</HTML>
