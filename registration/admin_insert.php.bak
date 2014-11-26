<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	if(isset($_POST["questions"])){
		$que=$_POST["questions"];
		$sql="insert into tbl_ins(questions)values('".$que."')";
		mysql_query($sql);
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
		var a=document.getElementById("questions").value;
		if(a==""){
			alert("please enter question");
			document.getElementById("questions").focus();
			return;
		}
		document.getElementById("form").submit();
	}
  </script>
 </HEAD>

 <BODY>
  <form method="POST" action="" id="form">
	<div style="border:1 px solid red;height:150px;width:20%;background-color:#818181;">
		<table border="0" cellspacing="0" cellpadding="5" width="100%">
			<tr>
				<th>administration</th>
			</tr>
			<tr>
				<td>questions</td>
			</tr>
			<tr>
				<td>
					<input type="text" id="questions" name="questions"> 
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="submit" onclick="function1()">
				</td>
			</tr>
		</table>
	</div>
  </form>
 </BODY>
</HTML>
