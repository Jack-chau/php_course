<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !isset($_POST['email']) ||
    !isset($_POST['password']) ||
    !isset($_POST['username'])   ) {
  header('location: insertuser_form.php');
  exit();
}
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$username = trim($_POST['username']);

try {
    /* 3. Prepare and execute SQL . . . */
  $sql =  'INSERT INTO user (email,password,username)';
  $sql .= 'VALUES(:email,:password,:username)';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":password", $password);
  $stmt->bindParam(":username", $username);
  $stmt->execute();
  
  /* 4. Check result . . . */
    if( $stmt->rowCount() == 1 ) {
        echo "New user is added.<br/>";
        echo "The new user ID is ".$pdo->lastInsertId();
    }else{
        echo "New user insert failed";
    }
    

} catch (PDOException $e) {
  die($e->getMessage());
}
