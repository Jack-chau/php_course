<?php
$dsn = 'mysql:dbname=lab8;host=localhost;charset=UTF8';
$dbuser = 'root';
$dbpwd = '12345678';

function dbconnect(){
	
  global $dsn, $dbuser, $dbpwd;
	
  try {
    $pdo = new PDO($dsn, $dbuser, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
						PDO::ERRMODE_EXCEPTION);
	return $pdo;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

