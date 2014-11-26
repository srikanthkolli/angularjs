<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	$sql="select * from tbl_adm";
	$getrow=mysql_query($sql);
	while($getr=mysql_fetch_array($getrow))
		{
		$id=$getr["id"];
		$que=$getr["questions"];
		
		$var="update set id='".$id."',questions='".$que."'";
		$up=mysql_query($var);
		 

	}
	if(isset($_POST["questions"])){
		$que=$_POST["questions"];
		$sql="insert into tbl_adm(questions)values('".$que."')";
		$getrow=mysql_query($sql);
		header("location:insert.php");
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
			alert("please write questions");
			document.getElementById("questions").focus();
			return;
		}
		document.getElementById("form").submit();
	}
  </script>
 </HEAD>

 <BODY>
  <form method="POST" action="" id="form">
	<div style="border:1 px solid red;width:20%;height:150px;margin:auto;margin-top:100px;background-color:#969696;">
		<table border="0" cellspacing="0" cellpadding="6" width="100%">
			<tr>
				<th>adminsteter</th>
			</tr>
			<tr>
				<td>questions</td>
			</tr>
			
			<tr>
				<td><input type="text" id="questions" name="questions" value="<?php echo $que;?>"></td>
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
