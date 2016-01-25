<?php
require 'connect.inc.php';
require 'core.inc.php';

if(loggedin()){
	echo 'You\'re logged in.';
}
else{
	include 'loginform.inc.php';

}

?>
