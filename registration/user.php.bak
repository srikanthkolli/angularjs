<?php
error_reporting(0);
	include("configure.php");
	if(isset($_POST["user"]))
	{
		$use=$_POST["user"];
		$pass=$_POST["word"];
		$sql="select * from tbl_admin where username='".$use."' and password='".$pass."'";
		$getrow=mysql_query($sql);
		if(mysql_num_rows($getrow)>0){
			$get=mysql_fetch_array($getrow);
			$used=$get["username"];
			$passw=$get["password"];
			$id=$get["id"];
			$_SESSION["name"]=$id;
			header("location:design_admin1.php");
		}
		else{
			echo "incorrect username and password";
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
  <link rel="stylesheet" type="text/css" href="login.css">
  <script>
	function function1(){
		var a=document.getElementById("user").value;
		var b=document.getElementById("word").value;
		var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(a==""){
			alert("please enter username");
			document.getElementById("user").focus();
			return;
		}
		if(re.test(a)==false){
			alert("invalid username");
			document.getElementById("user").focus();
			return;
		}
		if(b==""){
			alert("please enter password");
			document.getElementById("word").focus();
			return;
		}
		document.getElementById("form").submit();
	}
  </script>
 </HEAD>

 <BODY style="margin:0;padding:0;">
  <form method="POST" action="" id="form">
	<div class="header" style="background-color:#ECEFF1;">
		<div class="header1">
			<div>
				<div class="header2">Questions App
				</div>
			</div>
		</div>
		<div class="content">
			<div>
				<table border="1" cellpadding="20px;" cellspacing="0" style="margin:auto;margin-top:100px;width:30%;border-top-left-radius:5px;">
					<tr>
						<td style="border:0px;">
							<div style="margin-left:-16px;" class="login">Login
							</div>
						</td>
					</tr>
				</table>
				<table border="1" style="margin:auto;width:30%;background-color:white;" cellspacing="8" cellpadding="0">
					<tr>
						<td style="border:0px;">
							<div class="user">Username
							</div>
						</td>
					</tr>
					<tr>
						<td>
							
								<input type="text" style="width:100%;border:0px;height:30px;font-size:16px;" id="user" name="user">
							
						</td>
					</tr>
					<tr>
						<td style="border:0px;">
							<div class="word">Password
							</div>
						</td>
					</tr>
					<tr>
						<td>
							
								<input type="password" style="width:100%;border:0px;height:30px;font-size:25px;" id="word" name="word">
							
						</td>
					</tr>
				</table>
				<table border="1" cellspacing="0" style="margin:auto;width:30%;border-bottom-left-radius:5px;" cellpadding="20px;">
					<tr>
						<td style="border:0px;">
							
								<input type="button" value="submit" style="margin-left:60px;height:34px;width:24%;font-size:16px;background:#085a9f;color:white;" onclick="function1()">
							
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="footer">
			<div class="footer1">© Copyright 2013 Questions app.
			</div>
		</div>
	</div>
  </form>
 </BODY>
</HTML>
