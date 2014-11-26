 <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db(login,$con);
	if(isset($_POST["user"])){
		$use=$_POST["user"];
		$pass=$_POST["passw"];
		$sql="select * from tbl_login";
		$getrow=mysql_query($sql);
		if((mysql_num_rows($getrow)){
			$get=mysql_fetch_array($getrow);
			$user1=$get["username"];
			$pass1=$get["password"];
			$id=$get["id"];
			header("location:manoj.php");
		}
		else{ echo "error";}
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
		var b=document.getElementById("passw").value;
		if(a==""){
			alert("please enter username");
			document.getElementById("user").focus();
			return;
		}
		if(b==""){
			alert("please enter password");
			document.getElementById("passw").focus();
			return;
		}
		document.getElementById("form").submit();
    }
  </script>
 </HEAD>

 <BODY>
 <form method="POST" action="" id="form">
	<div>
		<table>
			<tr>
				<td>USERNAME:
				</td>
				<td>
					<input type="text" id="user" name="user">
				</td>
			</tr>
			<tr>
				<td>PASSWORD:</td>
				<td>
					<input type="password" id="pass" name="passw">
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
