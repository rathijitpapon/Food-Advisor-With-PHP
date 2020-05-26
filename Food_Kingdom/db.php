<?php

	require 'connection.php';
	
	$db = pg_connect("$host $port $dbname $user_info");

?>