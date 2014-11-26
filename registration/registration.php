<?php
	error_reporting(0);
	$con= mysql_connect("localhost","root","");
	@mysql_select_db("adminner",$con);
	$first_name="";
	$last_name="";
	$email="";
	$password="";
	$gender="";
	$yy="";
	$mm="";
	$dd="";
	$dob=""; 
	$address="";
	$country="";
	$pincode="";
	$phone="";
	$mobile="";
	$language="";
	$strlanguage="";
	$hobbies="";
	$var="";
	$photo="";

	if(isset($_GET["id"])){
		$id=$_GET["id"];
		$variable= "select * from form_reg where id='".$id."'";
		$var1=mysql_query($variable);
	while($get=mysql_fetch_array($var1)){
		$id=$get["id"];
		$first_name=$get["first_name"];
		$last_name=$get["last_name"];
		$email=$get["email"];
		$password=$get["password"];
		$gender=$get["gender"];
		$dob=$get["dob"];
		$dobArr =explode("-",$dob);
		$yy=$dobArr[0];
		$mm=$dobArr[1];
		$dd=$dobArr[2];
		$address=$get["address"];
		$country=$get["country"];
		$pincode=$get["pincode"];
		$phone=$get["phone"];
		$mobile=$get["mobile"];
		$language=$get["language"];
		$hobbies=$get["hobbies"];
		$var = serialize($hobbies);
		$photo=$get["photo"];
		//print_r($_POST);
  }
	}
	if(ISSET($_POST["first"])){
		$first_name=$_POST["first"];
		$last_name=$_POST["last"];
		$email=$_POST["email"];
		$password=$_POST["pass"];
		$gender=$_POST["user"];
		$mm=$_POST["mm"];
	    $dd=$_POST["dd"];
        $yy=$_POST["yy"];
		$dob=$yy.'-'.$mm.'-'.$dd; 
		$address=$_POST["area"];
		$country=$_POST["country"];
		$pincode=$_POST["code"];
		$phone=$_POST["number"];
		$mobile=$_POST["no"];
		$language=$_POST["language"];
		$strlanguage=serialize($language);
		$hobbies=$_POST["hobbies"];
		$var = serialize($hobbies);
		
		$photo=$_POST["file"];
		
		if($id!=""){
			$updateqry="update form_reg set first_name='".$first_name."',last_name='".$last_name."',email='".$email."',password='".$password."',gender='".$gender."',dob='".$dob."',address='".$address."',country='".$country."',pincode='".$pincode."',phone='".$phone."',mobile='".$mobile."',language='".$strlanguage."',hobbies='".$var."',photo='".$photo."' where Id='".$id."'";

			if(mysql_query($updateqry))
	{
//echo "location:edde.php";
header("Location: delete_file.php");
exit;

}
else{
	die('Error:'.mysql_error($con));
}
		}
		
		$sql="insert into form_reg(first_name,last_name,email,password,gender,dob,address,country,pincode,phone,mobile,language,hobbies,photo)values('$first_name','$last_name','$email','$password','$gender','$dob','$address','$country','$pincode','$phone','$mobile','$strlanguage','$var','$photo')";
		if (mysql_query($sql))
		{
		header("location:delete_file.php");
		}
		else{
			die('Error:'.mysql_error($con));
		}
	
  }
		
		
		
  ?>
  <script>
  function manoj(){
	  var i=document.getElementById("first").value;
	  var j=document.getElementById("last").value;
	  var k=document.getElementById("email").value;
	  var l=document.getElementById("pass").value;
	  var r1=document.getElementById("male").checked;
	  var r2=document.getElementById("female").checked;
	  var a=document.getElementById("area").value;
	  var p1=document.getElementById("code").value;
	  var p2=document.getElementById("number").value;
	  var p3=document.getElementById("no").value;
	  var t1=document.getElementById("tv").checked;
	  var t2=document.getElementById("games").checked;
	  var t3=document.getElementById("music").checked;
	  var t4=document.getElementById("read").checked;
	  var file=document.getElementById("file").value;
	  var nameRegex = /^[a-zA-Z\-]+$/;
	  var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		if(i==""){
		  alert("please enter your firstname");
		  document.getElementById("first").focus();
		  return;
		}
		if (nameRegex.test(i)==false){
			alert("invalid firstname");
			document.getElementById("first").focus();
			return;
		}
		if(j==""){
			alert("please enter your lastname");
			document.getElementById("last").focus();
			return;
		}
		if(nameRegex.test(j)==false){
			alert("invalid lastname");
			document.getElementById("last").focus();
			return;
		}
		if(k==""){
			alert("please enter your email");
			document.getElementById("email").focus();
			return;
	    }
		if(re.test(k)==false){
			alert("invalid email");
			document.getElementById("email").focus();
			return;
		}

		if(l==""){
			alert("please enter your password");
			document.getElementById("pass").focus();
			return;
	    }
		
		if(r1==false && r2==false){
			alert("please select your gender");
			return;
		}
		if(document.getElementById("dd").options[document.getElementById("dd").selectedIndex].value=="dd"){
			alert("please select day");
			return;
		}
		if(document.getElementById("mm").options[document.getElementById("mm").selectedIndex].value=="mm"){
			alert("please select month");
			return;
		}
		if(document.getElementById("yy").options[document.getElementById("yy").selectedIndex].value=="yy"){
			alert("please select year");
			return;
			
		}
		if(a==""){
			alert("please enter your address");
			document.getElementById("area").focus();
			return;
		}
		if(document.getElementById("country").options[document.getElementById("country").selectedIndex].value=="select"){
			alert("please select a country");
			return;
			
		}
		if(p1==""){
			alert("please enter your pincode");
			document.getElementById("code").focus();
			return;
		}
		if(isNaN(p1)){
			alert("invalid pincode");
			document.getElementById("code").focus();
			return;
		}
		if(p2==""){
			alert("please enter your phone number");
			document.getElementById("number").focus();
			return;
		}
		if(isNaN(p2)){
			alert("invalid phone number" );
			document.getElementById("number").focus();
			return;
		}
		if(p3==""){
			alert("please enter your Mobile number");
			document.getElementById("no").focus();
			return;
		}
		if(isNaN(p3)){
			alert("invalid mobile number");
			document.getElementById("no").focus();
			return;
		}
		valid=false;
		for(i=0;i<document.getElementById("language").options.length;i++){
			if(document.getElementById("language").options[i].selected){
				valid=true;
			}
		}
		if(valid==false){
			alert("please select language");
			return;
		}
		if(t1==false && t2==false && t3==false && t4==false){
			alert("please select Hobbies");
			return;
		}
		if(file==""){
			alert("please select the file");
			return;
		}
		document.getElementById("form").submit();
	 
	  
  }
  </script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 </head>
 <body>
	<form method="POST" action="" id="form">
	<table border="0" cellspacing="0" cellpadding="0" align="center" height="600px" width="60%">
		<tr>
			<td align="center">
				<table border="0" cellspacing="0" cellpadding="0" width="70%" height="650px" align="center">
								<tr>
									<th colspan="3">REGISTRATON FORM</th>
								</tr>
								<tr>
									<td>First Name:</td>
									<td>
										<input type="text" size="23" id="first" name="first" value="<?php echo $first_name;?>">
									</td>
								</tr>
								<tr>
									<td>Last Name:</td>
									<td width="30px">
										<input type="text" size="23" id="last" name="last" value="<?php echo $last_name;?>">
									</td>
								</tr>
								<tr>
									<td>E-mailId:</td>
									<td>
										<input type="text" size="23" id="email" name="email" value="<?php echo $email;?>">
									</td>
								</tr>
								<tr>
									<td>Password:</td>
									<td>
										<input type="password" size="23" id="pass" name="pass" value="<?php echo $password;?>">
									</td>
								</tr>
								
								<tr>
									<td>Gender:</td>
						<td>
							<table border="0" cellspacing="0" cellpadding="0" width="80%">
								<tr>
									<td>
										<input type="radio" name="user" value="male" id="male">Male</td>
									<td>
										<input type="radio" name="user" value="female" id="female">Female</td>
									<?php
										if(!empty($gender)){	
										if($gender=="male"){
									?>
			
									<script>
										$("#male").prop("checked",true);
									</script>
								<?php
									}else{
								?>
								<script>
									$("#female").prop("checked",true);
								</script>

								<?php
									}
								}
								?>
								</tr>
							</table>
							
						</td>
								</tr>
								<tr>
									<td>Date Of Birth</td>
									<td>
										<select id="dd" name="dd">
											<option value="dd">DD</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<?php
											if(!empty($dd)){
								

										?>
										<script>
											$("#dd").val(<?php echo '"'.$dd.'"';?>);
										</script>

										<?php

										}
										?>
										<select id="mm" name="mm">
											<option value="mm">MM</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
										<?php
	
			                             if(!empty($mm))
											 {

			                              ?>
			                              <script>
				                            $("#mm").val(<?php echo '"'.$mm.'"';?>);
			                            </script>

		                                <?php

		                                }
		                                   ?>
											<select id="yy" name="yy">
											<option value="yy">YY</option>
											<option value="1990">1990</option>
											<option value="1991">1991</option>
											<option value="1992">1992</option>
											<option value="1993">1993</option>
											<option value="1994">1994</option>
											<option value="1995">1995</option>
											<option value="1996">1996</option>
											<option value="1997">1997</option>
											<option value="1998">1998</option>
											<option value="1999">1999</option>
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
										</select>
										<?php
											if(!empty($yy)){
								

										?>
										<script>
											$("#yy").val(<?php echo '"'.$yy.'"';?>);
										</script>

										<?php

										}
										?>
									</td>
								</tr>
								<tr>
									<td valign="top">Address:</td>
									<td>
										<textarea rows="4" cols="18" id="area" name="area"><?php echo $address;?></textarea>
										
									</td>
								</tr>
								<tr>
									<td>Country:</td>
									<td>
										<select style="width:70%" id="country" name="country">
											<option value="select">Select</option>
											<option value="india">INDIA</option>
											<option value="usa">USA</option>
											<option value="uk">UK</option>
										</select>
										<?php
											if(!empty($country)){
								

										?>
										<script>
											$("#country").val(<?php echo '"'.$country.'"';?>);
										</script>

										<?php

										}
										?>
									</td>
								</tr>
								<tr>
									<td>Pincode:</td>
									<td>
										<input type="text" size="23" id="code" name="code" value="<?php echo $pincode;?>">
									</td>
								</tr>
								<tr>
									<td>Phone Number:</td>
									<td>
										<input type="text" size="23" id="number" name="number" value="<?php echo $phone;?>">
									</td>
								</tr>
								<tr>
									<td>Mobile Number:</td>
									<td>
										<input type="text" size="23" id="no" name="no" value="<?php echo $mobile;?>">
									</td>
								</tr>
								<tr>
									<td valign="top">Languages Known:</td>
									<td>
										<select multiple style="width:70%" id="language" name="language[]">
											<option value="english">English</option>
											<option value="telugu">Telugu</option>
											<option value="tamil">Tamil</option>
											<option value="hindi">Hindi</option>
										</select>
										
									</td>
								</tr>
								<tr>
									<td valign="top">Hobbies:</td>
									<td>
										<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td>
										<input type="checkbox" id="tv" name="hobbies[]" value="tv" <?php echo (in_array("tv",$var))?"checked":"";?>>Tv</td>
										<td><input type="checkbox" id="games" name="hobbies[]" value="games" <?php echo (in_array("games",$var))?"checked":"";?>>Games
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="music" name="hobbies[]" value="music" <?php echo (in_array("music",$var))?"checked":"";?>>Music</td>
									<td>	
										<input type="checkbox" id="read"  name="hobbies[]" value="read" <?php echo (in_array("read",$var))?"checked":"";?>>Read
									</td>
								</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>Upload Photo:</td>
									<td>
										<input type="file" id="file" name="file" accept="images/*">
									</td>
								</tr>
								<tr>
									<td colspan="3" align="center">
										<input type="button" value="Submit" onclick="manoj()">
										<INPUT TYPE="reset">
									</td>
								</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>	
 </body>
</html>                                    
