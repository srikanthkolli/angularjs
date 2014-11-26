<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
  <script>
	function function1(){
		var a=document.getElementById("pass").value;
		var b=document.getElementById("conf").value;
		if(a==""){
			alert("please enter password");
			return;
		}
		if(b==""){
			alert("please enter conform-password");
			return;
		}
		if(a!=b){
			alert("invalid password");
			return;
		}
	}
  </script>
 </HEAD>

 <BODY>
  <table>
	<tr>
		<td>Password:</td>
		<td>
			<input type="password" id="pass">
		</td>
	</tr>
	<tr>
		<td>Conform-Password:</td>
		<td>
			<input type="password" id="conf">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="button" value="submit" onclick="function1()">
		</td>
	</tr>
  </table>
 </BODY>
</HTML>
