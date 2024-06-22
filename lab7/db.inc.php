<?php
$dsn = 'mysql:dbname=;host=localhost;charset=UTF8';
$dbuser = 'root';
$dbpwd = '';

function dbconnect(){
	
  global $dsn, $dbuser, $dbpwd;
	
  try {
    $pdo = new PDO($dsn, $dbuser, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
						PDO::ERRMODE_EXCEPTION);
	return $pdo;
  } catch (PDOException $e) {
    die('Database Error');
  }
}

