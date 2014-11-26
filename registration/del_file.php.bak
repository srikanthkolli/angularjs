<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
@mysql_select_db(adminner,$con);
$id=$_GET["id"];
$Msg=$_GET['msg'];

if($Msg==2){
	$Message="Record updated successfully.";
}
else if($Msg==3){
	$Message="Record deleted successfully.";
}
if($id!=""){
	$DeleteQry="delete from form_reg where id='".$id."'";
	$DeleteRes=mysql_query($DeleteQry);
	if($DeleteRes){
		header("Location:del_file.php?msg=3");
		exit;
	}

}
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
 <form method="POST" action="" id="form">
 <table>
	<tr>
		<td>
			<input type="text" style="margin-left:270px;" id="search" name="search">
		</td>
		<td>
			<input type="submit" value="search">
		</td>
	</tr>
 </table>
 </form>
<table style="color:black;border:1px solid white;">
	<tr style="background-color:goldenrod;">
		<td>id</td>
		<td>first_name</td>
		<td>last_name</td>
		<td>email</td>
		<td>password</td>
		<td>gender</td>
		<td>dob</td>
		<td>address</td>
		<td>country</td>
		<td>pincode</td>
		<td>phone</td>
		<td>mobile</td>
		<td>language</td>
		<td>hobbies</td>
		<td>photo</td>
		<td>option</td>
	</tr>
	<input type="button" value="Add Record" onclick="location.href='reg_table.php'">
	<?php
		//echo "yes";
		$sea=$_POST["search"];
		
		$variable="SELECT * FROM `form_reg` where first_name like '".$sea."%'";
		//echo $variable;
		$var1=mysql_query($variable);
		$var2=mysql_num_rows($var1);
		//echo $var2;
			if($var2>0){
				$i=1;
				while($get=mysql_fetch_array($var1)){
					 $id=$get["id"];
					 $first_name=$get["first_name"];
					 $last_name=$get["last_name"];
					 $email=$get["email"];
					 $password=$get["password"];
					 $gender=$get["gender"];
					 $dob=$get["dob"];
					 $address=$get["address"];
					 $country=$get["country"];
					 $pincode=$get["pincode"];
					 $phone=$get["phone"];
					 $mobile=$get["mobile"];
					 $language=$get["language"];
					 $hobbies=$get["hobbies"];
					 $photo=$get["photo"];
				if($i%2==1)
				{
					$bgcolor="silver";
				}
				else
				{
					$bgcolor="lavender";
				}

			
	?>

	
	<tr bgcolor="<?php echo $bgcolor; ?>">

		<td><?php echo $id;?></td>
		<td><?php echo $first_name;?></td>
		<td><?php echo $last_name;?></td>
		<td><?php echo $email;?></td>
		<td><?php echo $password;?></td>
		<td><?php echo $gender;?></td>
		<td><?php echo $dob;?></td>
		<td><?php echo $address;?></td>
		<td><?php echo $country;?></td>
		<td><?php echo $pincode;?></td>
		<td><?php echo $phone;?></td>
		<td><?php echo $mobile;?></td>
		<td><?php echo $language;?></td>
		<td><?php echo $hobbies;?></td>
		<td><?php echo $photo;?></td>
		<td width="10%"><a href="reg_table.php?id=<?php echo $id;?>">Edit</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="del_file.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure want to delete this Record?')">Delete</a></td>
		</tr>
		<?php
			$i++;
			}
		}
		else{
				echo "<tr bgcolor='#a5a5a5'><td colspan=\"15\"><center>No Records found</center></td></tr>";
			}
		?>
	
		
	</table>
 </body>
</html>
