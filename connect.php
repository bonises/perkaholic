<?php
	$host = '127.0.0.1'; $user = 'root'; $password = ''; $dbname = 'perkaholic';
	// Set DSN(DATABASE SOURCE NAME)
	$dsn = 'mysql:host='. $host .';dbname='.$dbname.';'.'PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" '; 
	//skapa en PDO instans
	$pdo = new PDO($dsn, $user, $password);
	//Skapa en ny instans
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	//hämta objekt som standard!
?>