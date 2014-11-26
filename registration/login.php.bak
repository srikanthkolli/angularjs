<?php

/*-----------connection Database------*/

	$con=mysql_connect("localhost","root","");
	mysql_select_db("manoj",$con);



/*-----------connection Database complete------*/
	




/*-----------get the value in database---------*/
	
	  
	   
	   
	   $sql="select * from login ";

	   $getval=mysql_query($sql);

		while($getrow=mysql_fetch_array($getval))
		{
		$userd=$getrow["username"];
		$pass=$getrow["password"];
	
		}



/*---------get the value in database complete---------*/







/*-----------first post the text box value---------*/
	
	
	if(isset($_POST["user"]))
	{
		$user=$_POST["user"];
		$pasd=$_POST["passw"];

	
		

/*---------first post the text box value complete---------*/

	
/*--------------------Condition---------------------------*/	
	



    if($userd==$user AND $pass==$pasd)
	{
			header("Location: loginpage.php");

	}
	else
	{
	echo "Incorrect username and password";
	}
    }

/*----------------Condition Complete------------------------*/






?>






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  


  <!-----------------------Validation----------------------->
 
  
  
  
  
  <script>
	function function1(){
		var a=document.getElementById("username").value;
		var b=document.getElementById("password").value;
		if(a==""){
			alert("please enter your username");
			document.getElementById("username").focus();
			return;
		}
		if(b==""){
			alert("please enter your password");
			document.getElementById("password").focus();
			return;
		}
		document.getElementById("form").submit();
	}
  </script>



    <!-----------------------Validation----------------------->


  <!-----------------------Design the form----------------------->



 </HEAD>

 <BODY>
 <form method="POST" action="" id="form">
  <div style="border:1px solid red;width:30%;height:210px;">
	<div style="border:1px solid black;height:60px;">
		<div style="background-color:black;height:60px;">
			<div style="color:white;text-align:center;margin-top:20px;">LOGIN PAGE
			</div>
		</div>
	</div>
	<div style="border:1px solid green;height:150px;background-color:#DFFFFF;">
		<table cellpadding="10" cellspacing="0" align="center">
			<tr>
				<td>User Name</td>
				<td><input type="text" id="username" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" id="password" name="passw"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" value="submit" onclick="function1()"></td>
			</tr>
		</table>
	</div>
  </div>
  </form>
 </BODY>
</HTML>
  
  
  
  <!-----------------------Design the form Complete----------------------->
