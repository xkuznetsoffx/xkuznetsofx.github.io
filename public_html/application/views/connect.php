<?php

	$host = 'localhost';
	$username = 'mypdas6d_baxza3';
	$password = 'baxza3';
	$database = 'mypdas6d_baxza3';

	$pageRoot = 'http://mypdas6d.bget.ru/application/views/main_layout.php'; // without " / " at the end
	$yourEmail = 'yourEmail@gmail.com';
	$numUsers = 20; // number of users per page in admin panel
	$numSnip = 20; // number of snippets per page in admin panel

	$con = new mysqli($host, $username, $password, $database);

	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", "Server error");
	    exit();
	}
	
?>
