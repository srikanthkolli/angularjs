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

	$sql="select * from tbl_que where id='".$id."'";
	$getres=mysql_query($sql);
	$row=mysql_fetch_array($getres);
	$cate=$row["category"];
	$sub=$row["sub_category"];
	$que=$row["question"];
	$ans=$row["answers_type"];
	$answ=$row["answers"];
	$act=$row["active"];
	
	if(isset($_POST["category"])){
		$cate=$_POST["category"];
		$sub=$_POST["sub_category"];
		$que=$_POST["question"];
		$ans=$_POST["answers_type"];
		$answ=$_POST["answers"];
		$stransw=serialize($answ);
		//$stranswe=unserialize($answ);
		$act=$_POST["active"];
		if($id!=""){
		$updateqry="update tbl_que set
		category='".$cate."',sub_category='".$sub."',question='".$que."',answers_type='".$ans."',answers='".$stransw."',active='".$act."' where id='".$id."'";
		$getupdateres=mysql_query($updateqry);
		if($getupdateres){
			header("location:questions.php?msg=2");
		}
    }
	else{
		$sel="insert into tbl_que(category,sub_category,question,answers_type,answers,active)values('".$cate."','".$sub."','".$que."','".$ans."','".$stransw."','".$act."')";
		$getres=mysql_query($sel);
		if($getres){
			header("location:questions.php?msg=1");
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
		/* var a=document.getElementById("question").value;
		var b=document.getElementById("answers").value;
		var r1=document.getElementById("yes").checked;
		var r2=document.getElementById("no").checked;
		if(document.getElementById("category").options[document.getElementById("category").selectedIndex].value=="select"){
			alert("please select category");
			return;
		}
		
		if(a==""){
			alert("please enter question name");
			document.getElementById("question").focus();
			return;
		}
		
		if(document.getElementById("answers_type").options[document.getElementById("answers_type").selectedIndex].value=="select"){
			alert("please select answertype");
			return;
		}
		if(b==""){
			alert("please enter answer");
			document.getElementById("answers").focus();
			return;
		}
		if(r1==false && r2==false){
			alert("please check active");
			return;
		} */
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
				<a HREF="logout.php" style="height:40px;background-color:#3399FF;">Logout</a>
				<!-- <input type="button" value="Logout" style="height:40px;background-color:#3399FF;color:white;"> -->
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
				<div style="color:white;font-family:SWANSE__;">Questions
				</div>
				<div>
					<table border="0" cellspacing="0" cellpadding="5" align="center" style="margin-top:50px;">
						<tr style="font-family:SWANSE__;">
							<td>Category</td>
							<td>:</td>
							<td>
								<select id="category" name="category" onchange="showuser(this.value)" style="width:181px;">
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
							
							</td>
						</tr>
						<script>
							function showuser(str){
								if(str==""){
									document.getElementById("category").innerHTML="";
									return;
								}
								if(window.XMLHttpRequest){
									xmlhttp=new XMLHttpRequest();//code for IE7+, Firefox, Chrome, Opera, Safari
								}
								else{
									xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
								}
								xmlhttp.onreadystatechange=function(){
									if (xmlhttp.readyState==4 && xmlhttp.status==200){
										document.getElementById("sub_category").innerHTML=xmlhttp.responseText;
									}
								}
								xmlhttp.open("GET","ajax.php?id="+str,true);
								xmlhttp.send();
							}
						</script>
						<tr style="font-family:SWANSE__;">
							<td>Sub Category</td>
							<td>:</td>
							<td>
								
								<select style="width:180px;height:29px;" id="sub_category" name="sub_category">
									
								</select>
							</td>
						</tr>
						<tr style="font-family:SWANSE__;">
							<td>Question Name</td>
							<td>:</td>
							<td>
								<input type="text" id="question" style="width:181px;" name="question" value="<?php echo $que;?>">
							</td>
						</tr>
						<tr style="font-family:SWANSE__;">
							<td>Answer Type</td>
							<td>:</td>
							<td>
								<select id="answers_type" name="answers_type" style="width:181px;" onchange="test(this.value)">
									<option value="select">Select</option>
									<option value="Single Choice">Single Choice</option>
									<option value="Multiple Choice">Multiple Choice</option>
									<option value="Text Box">Text Box</option>
								</select>
							</td>
						</tr>
						<script>
							function test(){
								if(document.getElementById("answers_type").options[document.getElementById("answers_type").selectedIndex].value=="Text Box"){
									document.getElementById("answ").style.display="none";
								}
								else{
									document.getElementById("answ").style.display="";
								}
							}
						</script>
						<tr style="display:none;" id="answ" style="font-family:SWANSE__;">
							<td valign="top">Answers</td>
							<td valign="top">:</td>
							<td id="add_more">
								<input type="text" id="answers" style="width:181px;" name="answers[]" value="<?php echo $answ;?>">
								<input type="hidden" name="hdncnt" id="hdncnt">
								<a href="javascript:;" onclick="addMore('add_more','hdncnt')">Add Answer</a>
							</td>
						</tr>
						

						<tr style="font-family:SWANSE__;">
							<td>Active</td>
							<td>:</td>
							<td>
								<table>
									<tr>
										<td><input type="radio" name="active" value="yes" id="yes" <?php if ($act=='yes') echo "checked"; ?>>Yes</td>
										<td><input type="radio" name="active" value="no" id="no" <?php if ($act=='no') echo "checked"; ?>>No</td>
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
										<td><input type="button" value="<?php echo $buttonvalue ?>" style="background:url('mbg.jpg');color:white;border:0;border-radius:5px;padding:5px" onclick="function1()"></td>
										<td><input type="button" value="Cancel" style="background:url('mbg.jpg');color:white;border:0;border-radius:5px;padding:5px;" onclick="location.href='questions.php'"></td>
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
	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
       <script type="text/javascript">
	   
		function addMore(id,hdncnt){
			 var firstelement=document.getElementById(id);
			 var next,add,brele1,img;
			 var count=$("#"+hdncnt).val();
			 count++;
			 next=document.createElement("input");
			 next.type="text";
			 next.setAttribute("name","answers[]");
			 next.setAttribute("id","addMore"+count);
			 next.setAttribute("extra-data","extra");
			 add=document.createElement("br");
			 img=document.createElement("img");
			 img.title ="Delete";
			 img.setAttribute("name","img[]");
			 img.setAttribute("id","img"+count);
			 img.setAttribute("onclick", "deleteInput(this,'"+id+"','addMore"+count+"','"+hdncnt+"')");
			 img.setAttribute("extra-img","extra");
			 img.src ="cross.png";
			 img.style.cursor ="pointer";
			 firstelement.appendChild(add);
			 firstelement.appendChild(next);
			 firstelement.appendChild(img);
			 $("#"+hdncnt).val(count);
		}

		function deleteInput(imageEle,parentId,inpid,hdncnt){
			 var count=$("#"+hdncnt).val();
			 count--;
			 var inp=document.getElementById(inpid);
			 var parentEle=document.getElementById(parentId);
			 var firstbr=inp.previousSibling;
			 parentEle.removeChild(inp);
			 parentEle.removeChild(imageEle);
			 parentEle.removeChild(firstbr);
			 $("#"+hdncnt).val(count);
			}


  
 

</script>
  </form>

 </BODY>
 
</HTML>
