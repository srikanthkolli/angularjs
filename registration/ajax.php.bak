<?php
$id=$_GET['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("adminner",$con);
$var="";

$var.="<option value=\"0\">---------Select------------</option>";
$getmQry="select * from tbl_sub where category ='".$id."'";
$getmRes=mysql_query($getmQry);
while($getmRow=mysql_fetch_array($getmRes)){
    $var .="<option value='".$getmRow["id"]."'>".$getmRow["sub_category"]."</option>";
 }

 echo $var;
 ?>