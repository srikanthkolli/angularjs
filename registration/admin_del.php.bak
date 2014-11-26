<?php
	error_reporting();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("adminner",$con);
	$id=$getrow["id"];
	if($id!=""){
		$del="delete from tbl_ins where id='".$id."'";
		$sql=mysql_query($del);
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
 <input type="button" value="addrecord" onclick="location.href='admin_insert.php'">
  <form method="POST" action="">
	<div>
		<table border="collapse">
			<tr>
				<td>id</td>
				<td>questions</td>
				<td>options</td>
			</tr>
			<?php
				$sql="select * from tbl_ins";
				$getr=mysql_query($sql);
				if($getr>0){
					$i=1;
				while($row=mysql_fetch_array($getr)){
					$id=$row["id"];
					$que=$row["questions"];
				echo $id;
			?>
			<tr>
				<td><?php echo $id;?></td>
				<td><?php echo $que;?></td>
				<td width="10%"><a href="admin_insert.php?id=<?php echo $id;?>">edit &nbsp;&nbsp;/&nbsp;&nbsp;<a href="admin_del.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure want to delete this Record?')">delete</td>
			</tr>
			 <?php
				$i++;
				}
				}
			?>
		</table>
	</div>
  </form>
 
 </BODY>
</HTML>
