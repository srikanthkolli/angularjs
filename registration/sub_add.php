<?php
error_reporting(0);
$id=$_GET["id"];
$con=mysql_connect("localhost","root","");
mysql_select_db("adminner",$con);

if($id=='')
{
$buttonvalue="Add";
}
else
{
$buttonvalue="Save";
}

$sql="select * from tbl_sub where id='".$id."'";
$getres=mysql_query($sql);
$row=mysql_fetch_array($getres);
$cate=$row["category"];
$sub=$row["sub_category"];
$stat=$row["status"];

if(isset($_POST["category"])){
	$cate=$_POST["category"];
	$sub=$_POST["sub_category"];
	$status=$_POST["status"];
	if($id!=""){
		$updateqry="update tbl_sub set category='".$cate."',sub_category='".$sub."',status='".$status."' where id='".$id."'";
		$getupdateres=mysql_query($updateqry);
		if($getupdateres){
			header("location:sub.php?msg=2");
		}
    }
	else{
		$sel="insert into tbl_sub(category,sub_category,status)values('".$cate."','".$sub."','".$status."')";
		$getres=mysql_query($sel);
		if($getres){
			header("location:sub.php?msg=1");
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
  <link rel="stylesheet" type="text/css" href="sub_add.css">
  <script>
	function function1(){
		var a=document.getElementById("sub_category").value;
		var r1=document.getElementById("yes").checked;
		var r2=document.getElementById("no").checked;
		var nameRegex = /^[a-zA-Z\-]+$/;
		if(document.getElementById("category").options[document.getElementById("category").selectedIndex].value=="select"){
			alert("please select a category");
			return;
			
		}
		if(a==""){
			alert("please enter sub category");
			document.getElementById("sub_category").focus();
			return;
		}
		
		if(r1==false && r2==false){
			alert("please checked active");
			return;
		}
		document.getElementById("form").submit();
	}
  </script>
 </HEAD>

 <BODY style="margin:0;padding:0;">
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
				<A HREF="#" style="height:40px;background-color:#3399FF;">Logged in as admin@shenll.net</A>
				<!-- <input type="button" value="Logged in as admin@shenll.net" style="height:40px;background-color:#3399FF;color:white;"> -->
			<div class="header5">
				<!-- <input type="button" value="Logout" style="height:40px;background-color:#3399FF;color:white;"> -->
				<a HREF="logout.php" style="height:40px;background-color:#3399FF;">Logout</a>
			</div>
			</div>
		</div>
		<div style="border:1px solid black;width:16%;height:600px;float:left;background-color:#ECEFF1;">
			<div style="float:left;height:40px;width:10%;border:1 px solid red;">
				<div style="margin-left:10px;">
					<img src="imgins/logo1.png">
				</div>
			</div>
			<div style="float:left;height:40px;width:88%;border:1 px solid red;">
				<div style="margin-top:3px;margin-left:20px;font-family:SWANSE__;"><a href="design_home.php">Home</a>
				</div>
			</div>
			<div style="float:left;height:40px;width:10%;border:1 px solid red;">
				<div style="margin-left:10px;">
					<img src="imgins/logo2.png">
				</div>
			</div>
			<div style="float:left;height:40px;width:88%;border:1 px solid red;">
				<div style="margin-top:3px;margin-left:20px;font-family:SWANSE__;"><a href="categries.php">Manage Categories</a>
				</div>
			</div>
			<div style="float:left;height:40px;width:10%;border:1 px solid red;">
				<div style="margin-left:10px;">
					<img src="imgins/logo3.png">
				</div>
			</div>
			<div style="float:left;height:40px;width:88%;border:1 px solid red;">
				<div style="margin-top:3px;margin-left:15px;font-family:SWANSE__;"><a href="sub.php">Manage Sub Category</a>
				</div>
			</div>
			<div style="float:left;height:40px;width:10%;border:1 px solid red;">
				<div style="margin-left:10px;">
					<img src="imgins/logo4.png">
				</div>
			</div>
			<div style="float:left;height:40px;width:88%;border:1 px solid red;">
				<div style="margin-top:3px;margin-left:20px;font-family:SWANSE__;"><a href="questions.php">Manage Questions</a>
				</div>
			</div>
		</div>
		<div style="float:left;height:500px;width:78%;border:1px solid #0061a6;margin-top:20px;margin-left:10px;">
			<div style="border:1px solid #0061a6;height:30px;background-color:#0061a6;">
				<div style="color:white;font-family:SWANSE__;">Sub Category
				</div>
				<div>
					<table border="0" cellspacing="0" cellpadding="5" align="center" style="margin-top:50px;">
						<tr>
							<td><b>Category</b></td>
							<td style="color:red;">:*</td>
							<td>
								<select id="category" name="category">
									<option value="select">Select</option>
								   <?php
										$getmQry="select * from tbl_cate";
										$getmRes=mysql_query($getmQry);
										while($getmRow=mysql_fetch_array($getmRes)){
										?>
										<option value="<?php echo $getmRow["id"];?>"><?php echo $getmRow["category"];?></option>
										<?php
										}
									?>
								</select>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Sub Category</b></b></td>
							<td style="color:red;">:*</td>
							<td>
								<input type="text" id="sub_category" name="sub_category" value="<?php echo $sub;?>">
							</td>
						</tr>
						<tr>
							<td><b>Active</b></td>
							<td style="color:red;">:*</td>
							<td>
								<table>
									<tr>
										<td><input type="radio" name="status" id="yes" value="Active" <?php if ($stat=='Active') echo "checked"; ?>>Yes</td>
										<td><input type="radio" name="status" id="no" value="In-Active" <?php if ($stat=='In-Active') echo "checked"; ?>>No</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<table>
									<tr>
										<td><input type="button" value="<?php echo $buttonvalue ?>" style="background:url('mbg.jpg');color:white;border:0;border-radius:5px;padding:5px;"onclick="function1()"></td>
										<td><input type="button" value="Cancel" style="background:url('mbg.jpg');color:white;border:0;border-radius:5px;padding:5px;" onclick="location.href='sub.php'"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
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
