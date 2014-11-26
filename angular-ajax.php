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

	function loginFunc(){
		global $posted_data, $dbconn;
		$useremail = $posted_data->data->user_email;
		$userpassword = sha1($posted_data->data->user_password);
		$qry_prep = $dbconn->prepare("select user_id from tbl_users where user_email = :email and user_password = :password");
		$qry_prep->execute(array(":email"=>$useremail, ":password"=>$userpassword));
		if($qry_prep->rowCount() > 0 ){
			session_start();
			$_SESSION['user_id'] = $qry_prep->fetchColumn();
			die('success');
		}else
			die('invalid');
	}
	if(!empty($posted_data->action)){
		$f_to_call = trim($posted_data->action);
		if(function_exists($f_to_call)){
			$f_to_call();
		}else
			$error['error'] = 'Invalid Action';
	}
?>