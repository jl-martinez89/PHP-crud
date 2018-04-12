<?php
	/* ===== CLASS -> OBJECT ======
	Class: A collection of methods (functions) and properties (variables)
	Object: The application of a class "new"

	Steps in working with a database
	1. Connect to MySQL
	2. Select the database
	3. Query (C.R.U.D.)
	4. Close the connection */

	/* Connection to the MySQL system
	============================================ */

	// define a global variable
	define('_HOST_NAME', 'localhost');
	define('_DATABASE_USER', 'root');
	define('_DATABASE_PASSWORD', '');
	define('_DATABASE_NAME', 'userdate');

	$MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER,_DATABASE_PASSWORD,_DATABASE_NAME);
	if ($MySQLiconn->connect_errno){
		die("Error: ->".$MySQLiconn->connect_error);
	}