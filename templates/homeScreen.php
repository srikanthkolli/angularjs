<?php
session_start();
?>
<div ng-controller='HomeScreenController'>

<?php

if(!empty($_SESSION['user_id'])){

	echo '<h2>You are in home screen</h2>';

}else{
	echo '<h2>You have no access to view this page</h2>';
}
?>
</div>