<?php

	session_start();

//	require_once 'classes/errors.class.php';

	// **** Comment out 2 lines below for production *** 
	/*
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	*/

	//include setup
	define('INCDIR', dirname(__FILE__));
	define('CLASSDIR', INCDIR.'classes/');
	
	define('HOST_NAME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
	define('FLDR_SQL_IP', $_SERVER['SERVER_ADDR']);
	
	//	define('DEFAULT_LOG_PATH', HOST_NAME . '/logs/' . date('m-d-Y') . '.log');
	define('DEFAULT_LOG_PATH', $_SERVER['DOCUMENT_ROOT'] . '/logs/' . date('m-d-Y') . '.log');

	//Page stuff
	define('TITLE', 'My Site Title in Config');
	
	define('SECURITY_GROUP', 'ITAuth'); // orginal for labelpro Not working so trying below - Mike 11/10/2020
	//	define('SECURITY_GROUP', 'AcctIOD');
	//	$security_group = 'AcctIOD';
	$security_group = 'ITAuth';


	//Reroute Bartow print jobs to the Bartow file server.
	// Might not need below
	//	$octets = explode('.', $_SERVER['REMOTE_ADDR']);

	//Encryption salt
	//A good spot to generate these salts is at http://clsc.net/tools/random-string-generator.php
	//check all boxes and watch out for single quotes!
	define('SALT', '7-3Vcl2_Os>_-d_{:{_r£FDXjT.-xiP!');//32 characters

	//PDO database setup
	define('DB_READ_TYPE', 'mysql');	//we are using PDO, the mysql driver provides (I think) the mysqli features, including prepared statements which we use
	define('DB_READ_HOST', 'localhost');
	define('DB_READ_PORT', 3306);
	define('DB_READ_USER', 'myuser');
	define('DB_READ_PASS', 'mypass');
	define('DB_READ_DB', 'mydb');
	define('DB_READ_PERSIST', false);
	
	//in case we want separate read/write dbs
	define('DB_WRITE_TYPE', 'mysql');	//we are using PDO, the mysql driver provides (I think) the mysqli features, including prepared statements which we use
	define('DB_WRITE_HOST', 'localhost');
	define('DB_WRITE_PORT', 3306);
	define('DB_WRITE_USER', 'myuser');
	define('DB_WRITE_PASS', 'mypass');
	define('DB_WRITE_DB', 'mydb');
	define('DB_WRITE_PERSIST', false);

		
?>
