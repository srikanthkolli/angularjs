<?php
	error_reporting();
	$con=mysql_connect("localhost","root","");
	@mysql_select_db("adminner",$con);

	$id=$_GET["id"];

	if($id!="")
		{
		 $del="delete from tbl_adm where id='".$id."'";
		 			

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
 <input type="button" value="addrecord" onclick="location.href='adminner.php'">
	
  <form>
	<div>
		<table border="collapse" bgcolor="#595959">
			<tr>
				<td>id</td>
				<td>questions</td>
				<td>options</td>
			</tr>
			<?php
				$sql="select * from tbl_adm";
				$getrow=mysql_query($sql);
				if($getrow>0){
					$i=1;
				while($row=mysql_fetch_array($getrow)){
					$id=$row["id"];
					$var=$row["questions"];
				
			?>
			<tr>
				<td><?php echo $id;?></td>
				<td><?php echo $var;?></td>
				<td width="10%"><a href="adminner.php?id=<?php echo $id;?>">edit&nbsp;&nbsp;/&nbsp;&nbsp;<a href="insert.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure want to delete this Record?')">delete</td>
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
