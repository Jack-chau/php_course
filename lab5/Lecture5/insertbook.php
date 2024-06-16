<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !isset($_POST['isbn']) ||
    !isset($_POST['bookname'])  ||
	!isset($_POST['author'])  ||
    !isset($_POST['publishDate'])   ) {
  header('location: insertbook_form.php');
  exit();
}
$isbn = trim($_POST['isbn']);
$bookname = trim($_POST['bookname']);
$author = trim($_POST['author']);
$publishDate = trim($_POST['publishDate']);

try {
    /* 3. Prepare and execute SQL . . . */
  $sql =  'INSERT INTO books (isbn,bookname,author,publishDate)';
  $sql .= 'VALUES(:isbn,:bookname,:author,:publishDate)';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":isbn", $isbn);
  $stmt->bindParam(":bookname", $bookname);
  $stmt->bindParam(":author", $author);
  $stmt->bindParam(":publishDate", $publishDate);
  $stmt->execute();
  
  /* 4. Check result . . . */
    if( $stmt->rowCount() == 1 ) {
        echo "New book is added.<br/>";
        echo "The ISBN is ".$pdo->lastInsertId();
    }else{
        echo "New book insert failed";
    }
    

} catch (PDOException $e) {
  die($e->getMessage());
}
