<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !array_key_exists('id',$_GET) ||
    !array_key_exists('name',$_POST) ||
	!array_key_exists('class',$_POST) ) {
  header('location: dbstu.php');
  exit();
}
$id = $_GET['id'];
$name = $_POST['name'];
$class = $_POST['class'];

try {
    /* 3. Prepare and execute SQL . . . */
  $sql =  'UPDATE student ';
  $sql .= ' SET name = :name, class = :class, updated_at = now() ';
  $sql .= ' where id = :id ';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":class", $class);
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  
  /* 4. Check result . . . */
  if( $stmt->rowCount() == 1 ) {
	$queryString = 't='.$id;  // ok
  }
  else {
	$queryString = 'f='.$id;  // fail
  }
  header('location: msgupdate.php?'.$queryString);
  exit();

} catch (PDOException $e) {
  die($e->getMessage());
}
