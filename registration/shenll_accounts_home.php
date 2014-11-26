<?php
error_reporting(0);
include("config.php");
$get_row=mysql_query("SELECT * FROM details");
$get_arr=mysql_fetch_array($get_row);
$date=$get_arr["date"];
//echo	$first_name;
$morning=$get_arr["morning"];
$evening=$get_arr["evening"];
$total=$get_arr["total"];
$price=$get_arr["price"];

if(isset($_POST["date"]))
{
	$date=$_POST["date"];
	$morning=$_POST["morning"];
	$evening=$_POST["evening"];
	$total=$morning+$evening;
	$price=7;
	
}
$con=mysqli_connect("localhost","root","","shenll_accounts");
$sql="INSERT INTO details(date,morning,evening,total,price)
			  VALUES('$date','$morning','$evening','$total','$price')";

if (mysqli_query($con,$sql))
{
	echo " 1 record added ";
	
}
else{
	die('Error:'.mysqli_error($con));
}

	?>
<html>
<head>
 <script>

 function myfunction()
	{

		var fname=document.Myform.date.value;
		
		var lname=document.Myform.morning.value;
		
		var mail=document.Myform.evening.value;
		
		
		var pnumbers=/^[0-9]+$/;
		var pdate=/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/
		
	
		//var hobbies=document.Myform.hobbies.value;
		
		
		
		if(fname=="")
		{
			alert("Please enter date");
			document.Myform.date.focus();
			return false;
		}
		else if(pdate.test(fname)==false)
		{
			alert('Enter valid date eg.20/12/2014');
			document.Myform.date.focus();
		}
		
		else if (lname=="")
		{
			alert("Please enter morning details");
			document.Myform.morning.focus();
			return false;
		}
		else if(pnumbers.test(lname)==false)
		{
			alert('Enter valid details');
			document.Myform.morning.focus();
		}
		else if (mail=="")
		{
			alert("Please enter evening details");
			document.Myform.evening.focus();
			return false;
		}
		else if(pnumbers.test(mail)==false)
		{
			alert('Enter valid details');
			document.Myform.evening.focus();
		}
		
		else
		{
			document.Myform.submit();
			
		}
		
		
	}
  </script>
 
  <style>
   div
  {
	font-family:verdana;
	font-size:12px;
  }
  </style>
  </head>
  <body>
  <form method="post"  name="Myform"  enctype="multipart/form-data">
		<div style="background-color:#F9F5D1;">
			<div style="background-color:#FDFBEE;margin:auto;border:2px solid black;width:800px;height:700px"><p><center style="font-size:25px">Registration Form</center></p>
				<div style="width:800px;height:40px">
					<div style="width:350px;float:left">
						<div style="text-align:right;">
							Date:
						</div>
					</div>
					<div style="width:400px;float:left">
						<div>
							<input type="text" name="date" value="<?php echo $date;?>">
						</div>
					</div>
				</div>
				<div style="width:800px;height:40px">
					<div style="width:350px;float:left">
						<div style="text-align:right;">
							Morning:
						</div>
					</div>
					<div style="width:400px;float:left">
						<div>
							<input type="text" name="morning" value="<?php echo $morning;?>">
						</div>
					</div>
				</div>

				<div style="width:800px;height:40px">
					<div style="width:350px;float:left">
						<div style="text-align:right;">
							Evening:
						</div>
					</div>
					<div style="width:400px;float:left">
						<div>
							<input type="text" name="evening" value="<?php echo $evening;?>">
						</div>
					</div>
				</div>
				
				<div style="width:800px;height:40px">
					<div style="width:350px;float:left">
						<div>
							<input style="float:right" type="button" value="submit" onclick="myfunction()">
						</div>
					</div>
					<div style="width:400px;float:left">
						<div>
							<input type="reset">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
<html>
