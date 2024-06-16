<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !isset($_GET['isbn']) ||
    !isset($_POST['bookname'])  ||
	  !isset($_POST['author'])  ||
    !isset($_POST['publishDate'])   ) {
  header('location: displaybook.php');
  exit();
}
$isbn = $_GET['isbn'];
$bookname = trim($_POST['bookname']);
$author = trim($_POST['author']);
$publishDate = trim($_POST['publishDate']);

try {
    /* 3. Prepare and execute SQL . . . */
  $sql =  'UPDATE books ';
  $sql .= ' SET bookname=:bookname,author=:author,publishDate=:publishDate ';
  $sql .= ' where isbn=:isbn';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":isbn", $isbn);
  $stmt->bindParam(":bookname", $bookname);
  $stmt->bindParam(":author", $author);
  $stmt->bindParam(":publishDate", $publishDate);
  $stmt->execute();
  
  /* 4. Check result . . . */
  if($stmt->rowCount() >0 ){
    echo "Update successful <br>";
    echo $stmt->rowCount()." row affected<br>";
  }else{
    echo "Update Fail";
  }
  echo "<a href='displaybooks.php'>display all book</a>";
} catch (PDOException $e) {
  die($e->getMessage());
}
