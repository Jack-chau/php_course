<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php"; // the path should change depends on your folder structure 
$pdo = dbconnect();

/* 2. Validate and get data . . . */

try {
 /* 3. Prepare and execute SQL . . . */
    $sql = "SELECT * FROM user";
    $sql .= " WHERE email = :email";
    $sql .= " AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();

 /* 4. Check result . . . */
    if($stmt->rowCount() < 1) {
        echo "Login Fail";
    } else { 
        while( $result = $stmt->fetch() ) {
            var_dump($result);
        }
    }
    
} catch (PDOException $e) {
 die($e->getMessage());
}
?>
<html><head>
<!-- 5. Show result . . . -->

