<?php
	define('serverName', 'localhost');
	define('userName', 'root');
	define('password', '');
	define('database', 'manaknight');

	$connection = mysqli_connect(serverName,userName,password,database);
	if (!$connection){ 
		die("connection is not made");
	}
?>