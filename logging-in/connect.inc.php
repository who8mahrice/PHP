<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';


$mysql_db = 'a_database';

if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)) {
	die(mysql_error());
}
else {
	echo 'Connected to database: '.$mysql_db.'<br>';
}

?>
