<?php
$host = 'localhost';
$username = 'people';
$password = 'qaz123';

//connect to mysql; if failed return error
if (mysql_connect($host, $username, $password)) {

	//connect to the database within mysql; if failed return error
	if (mysql_select_db('a_database')) {
		echo 'connected <br>';
	} else {
		echo 'Connection to database failed';
	}
} else {
	echo mysql_error();
}
?>