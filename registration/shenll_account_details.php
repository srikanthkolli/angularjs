<?php
	$con=mysqli_connect("localhost","root","","shenll_accounts");
	$result=mysqli_query($con,"SELECT * FROM details");
	

	/**$updt_id=base64_decode($_GET["toedit"]);**/


	if(isset($_GET["todelete"]))
	{
		$del_id=base64_decode ($_GET["todelete"]);
		 mysqli_query($con,"DELETE FROM details WHERE id=$del_id");
	}

	?>
	<script>
function showUser(str)
{
	
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	//alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("GET","ajax-form.php?q="+str,true);
xmlhttp.send();
}
</script>
<style>
	table,tr,th,td
	{
		border:1px solid black;
		padding:10px;
		font-family:verdana;
		font-size:12px;
	}
	th
	{
		background-color:tan;

	}
	.first_row
	{
	
		background-color:#FFFFCC;
	}
	 .second_row
	{
	
		background-color:#DFF3F5;
	}
	
</style>
<a href='shenll_accounts_home.php' style="float:right;">Add</a>
<form>
<select name="users" onchange="showUser(this.value)" style="float:left;">
<option value="">Select table:</option>
<option value="1">First_row</option>
<option value="2">Second_row</option>
<option value="3">Third_row</option>
<option value="4">Fourth_row</option>
<option value="5">Fifth_row</option>
<option value="6">Sixth_row</option>
<option value="7">Seventh_row</option>
<option value="8">Eighth_row</option>
<option value="9">Ninth_row</option>
<option value="10">Tenth_row</option>
</select>
</form>
<br>
<div id="txtHint">

<?php
	
	$con=mysqli_connect("localhost","root","","shenll_accounts");
	$result=mysqli_query($con,"SELECT * FROM details");

	echo "<table border=1 cellspacing=0 style='width:100%'>
		<tr>
		<th>Date</th>
		<th>Morning</th>
		<th>Evening</th>
		<th>Total</th>
		<th>Price</th>
		<th>Total Price</th>
		</tr>";
$i=0;
	while($row=mysqli_fetch_array($result))
	{
		$bgcolor=($i%2==0)?"first_row":"second_row";
		$id=base64_encode($row["id"]);
		echo "<tr class='".$bgcolor."'>";
		echo "<td>" .$row['date']. "</td>";
		echo "<td >" .$row['morning']. "</td>";
		echo "<td>" .$row['evening']. "</td>";
		echo "<td>" .$row['total']. "</td>";
		echo "<td>" .$row['price']. "</td>";
		echo"<td>"."<a href='shenll_accounts_home.php?toedit=$id'>Edit</a> <a href='?todelete=$id'> | Delete</a>"."</td>";
		echo"</tr>";
		$i++;
	}
	echo"</table>";
?></div>
	
