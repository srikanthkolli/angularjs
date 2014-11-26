<?php
	global $error, $posted_data, $dbconn;
 	$dbconn = new PDO('mysql:host=localhost;dbname=angulardb', 'root', '');
	$params = (file_get_contents('php://input'));
	$posted_data = json_decode($params);
	function signUpFunc(){
		global $posted_data, $dbconn;
		$usernm = $posted_data->data->user_name;
		$useremail = $posted_data->data->user_email;
		if($dbconn->query('insert into tbl_users(user_name, user_email, created_date) values("'.$usernm.'", "'.$useremail.'", "'.date("Y-m-d H:i:s").'")')){
			die('success');
		}else
			die('error');
	}
	if(!empty($posted_data->action)){
		$f_to_call = trim($posted_data->action);
		if(function_exists($f_to_call)){
			$f_to_call();
		}else
			$error['error'] = 'Invalid Action';
	}
?>