<?php
ob_start(); // will be using header func that is in loginform.inc.php
session_start();
$current_file = $_SERVER['SCRIPT_NAME']; //displays file's path w/o hostname.
//$current_file = $_SERVER['SCRIPT_FILENAME']; //displays file's FULL path

function loggedin(){
	if(isset($_SESSION['user_id']) &&!empty($_SESSION['user_id'])) {
		return true;
	} 
	else {
		return false;
	}
}
?>
