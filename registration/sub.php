<?php
error_reporting(0);
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	 $id=$_GET["id"];
	 $Msg=$_GET['msg'];
	 if($Msg==1){
		$Message="Record inserted successfully.";
	 }
	 else if($Msg==2){
		$Message="Record updated successfully.";
	 }
	else if($Msg==3){
		$Message="Record deleted successfully.";
	}
	if($id!=""){
		$DeleteQry="delete from tbl_sub where id='".$id."'";
		$DeleteRes=mysql_query($DeleteQry);
	if($DeleteRes){
		header("Location:sub.php?msg=3");
		exit;
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
  <link rel="stylesheet" type="text/css" href="categries.css">

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
			<div>
				<div><img src="imgins/get2.png" width="100%" height="30px">
				</div>
				<div style="float:right;margin-top:10px;margin-right:10px;font-family:SWANSE__;"><a href="sub_add.php">Add Sub Category</a>
				</div>
				<div>
					<table style="border:1px solid white;margin-top:50px;" align="center">
						<tr style="background-color:#cae1f9;">
							<td align="center">SNO</td>
							<td align="center">Category</td>
							<td align="center">Sub Category</td>
							
							<td align="center">Status</td>
							<td align="center">Action</td>
						</tr>
						<?php
							$sel="select * from tbl_sub";
							$res=mysql_query($sel);
							$row=mysql_num_rows($res);
							if($row>0){
								$i=1;
								while($get=mysql_fetch_array($res)){
									$id=$get["id"];
									$cate=$get["category"];
                                    $getmQry="select * from tbl_sub where category ='".$cate."'";
									$getmRes=mysql_query($getmQry);
							        $getmRow=mysql_fetch_array($getmRes);


									$category=$getmRow["sub_category"];
								    $getmQry="select * from tbl_cate where id ='".$cate."'";
									$getmRes=mysql_query($getmQry);
							        $getmRow=mysql_fetch_array($getmRes);
									$cate_val= $getmRow['category'];

									$sub=$get["sub_category"];





									$status=$get["status"];

									if($i%2==1)
									{
									$bgcolor="#f6f6f6";
									}
									else
									{
									$bgcolor="#eef2fd";
									}
							
						?>
						 <tr bgcolor="<?php echo $bgcolor; ?>">
							<td align="center"><?php echo $i;?></td>
							<td align="center"><?php echo $cate_val;?></td>
							<td align="center"><?php echo $sub;?></td>
							<td align="center"><?php echo $status;?></td>
							<td width="10%" align="center"><a href="sub_add.php?id=<?php echo $id;?>">Edit</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="sub.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure want to delete this Record?')">Delete</a></td>
						</tr>
						<?php
							$i++;
							}
							}

						?>
					</table>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="footer1">� Copyright 2013 Questions app.
			</div>
		</div>
	</div>
  </form>
 </BODY>
</HTML>