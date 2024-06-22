<?php
require_once "./inc/session.inc.php";

/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

//Task6-2 Get the admin ID from session
$adminID = __??__;
$password = $_POST['password'];
$email = $_POST['email'];

try {
    /* 3. Prepare and execute SQL . . . */
  $sql =  'UPDATE admin ';
  $sql .= ' SET password = :password, email = :email ';
  $sql .= ' where adminID = :adminID ';

  $stmt = $pdo->prepare($sql);
  $options = [
      'cost' => 12 
  ];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT, $options);
  $stmt->bindParam(":password", $hashed_password);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":adminID", $adminID);
  $stmt->execute();
  
  /* 4. Check result . . . */
  if( $stmt->rowCount() == 1 ) {
	  echo "<script>alert('Update successful\\nRequired you to login again'); window.location.href='login_form.php';</script>";
  }else {
    echo "<script>alert('Update Failed'); window.location.href='frmAdminUpdate.php';</script>";
  }

} catch (PDOException $e) {
  die($e->getMessage());
}
