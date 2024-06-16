<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !array_key_exists('isbn',$_GET) ) {
    header('location: displaybooks.php');
    exit();
  }
  $isbn = $_GET['isbn'];
  
try {
  /* 3. Prepare and execute SQL . . . */
  $sql =  "DELETE FROM books ";
  $sql .= " WHERE isbn = :isbn ";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":isbn", $isbn);
  $stmt->execute();

  /* 4. Check result . . . */

  header('location: displaybooks.php');
  exit();

} catch (PDOException $e) {
  die($e->getMessage());
}