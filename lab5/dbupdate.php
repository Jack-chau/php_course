<?php
/* 1. Connect to the database */
require_once "../inc/db.inc.php";   // the path should change depends on your folder structure 
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !array_key_exists('id', $_GET) ||
	!array_key_exists('name', $_GET) ||
	!array_key_exists('class', $_GET) ) {

  header('location: dbstu.php');
  exit();
}
$id = $_GET['id'];
$name = $_GET['name'];
$class = $_GET['class'];

try {
 /* 3. Prepare and execute SQL . . . */
    $sql =  'UPDATE student ';
    $sql .= ' SET name=:name, class=:class, updated_at=NOW()';
    $sql .= ' WHERE id=:id ';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(__??__, __??__);
    $stmt->bindParam(__??__, __??__);
    $stmt->bindParam(__??__, __??__);
    $stmt->execute();

  /* 4. Check result . . . */
  if( $stmt->rowCount() == 1 ) {
	$queryString = 't='.$id;  // ok
  }
  else {
	$queryString = 'f='.$id;  // fail
  }
  header('location: msgupdate.php?'. $queryString);
  exit();

} catch (PDOException $e) {
die($e->getMessage());
}
