<?php 
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "wknd1803");

	//CONNECT TO DATABASE
	$connect = mysqli_connect(DBHOST, DBUSER, DBPASS);
	if(!$connect){
		die("Could not connect ".mysqli_error($connect));
	}

	//SELECT DATABASE
	$select_db = mysqli_select_db($connect, DBNAME);
	if(!$select_db){
		die("Could not select a database ".mysqli_error($connect));
	}