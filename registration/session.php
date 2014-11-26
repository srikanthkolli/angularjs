<?php
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	if(isset($_POST["user"])){
		$use=$_POST["user"];
		$pass=$_POST["word"];
		$sql="select * from tbl_admin username='".$use."',password='".$pass."'";
		$getrow=mysql_query($sql);
		if(mysql_num_rows($getrow)>0){
			$get=mysql_fetch_array($getrow);
			$used=$get["username"];
			$passw=$get["password"];
			$id=$get["id"];
			$_SESSION["name"]=$id;
			header("location:home.php");
			exit;
		}
		else{
			echo "error";
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
 </HEAD>

 <BODY>
  
 </BODY>
</HTML>
