<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	if(isset($_POST["email"])){
		$em=$_POST["email"];
		$pa=$_POST["pass"];
		$sql="select * from tbl_login";
		$getrow=mysql_query($sql);
		while($getr=mysql_fetch_array($getrow)){
			$var=$getr["email"];
			$var1=$getr["password"];
			if($em==$var AND $pa==$var1){
				header("location:admin_insert.php");
			}
			else{
				echo "incorrect";
			}
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
		var a=document.getElementById("email").value;
		var b=document.getElementById("pass").value;
		if(a==""){
			alert("please enter your email");
			document.getElementById("email").focus();
			return;
		}
		if(b==""){
			alert("please enter your password");
			document.getElementById("pass").focus();
			return;
		}
		document.getElementById("form").submit();
	}
  </script>
 </HEAD>

 <BODY>
  <form method="POST" action="" id="form">
	<div style="border:1 px solid red;height:150px;width:25%;background-color:#7C7C7C;">
		<table border="0" cellspacing="0" cellpadding="4">
			<tr>
				<th colspan="2">LOGINPAGE</th>
			</tr>
			<tr>
				<td>EMAIL:</td>
				<td>
					<input type="text" id="email" name="email">
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
