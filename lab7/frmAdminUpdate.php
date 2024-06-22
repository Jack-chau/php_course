<?php
require_once "./inc/session.inc.php";
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

//Task6-1 Get the admin ID from session
$adminID = __??__;

try {
  $sql =  'SELECT email FROM admin ';
  $sql .= ' WHERE adminID = :adminID ';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":adminID", $adminID);
  $stmt->execute();


  if( $stmt->rowCount() == 0 ) {
    // student not found
    header('location: dbstu.php');
    exit();
  }

  $result = $stmt->fetch();
  $email = $result['email'];

} catch (PDOException $e) {
  die($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Data Update Form</title>
</head>
<body>
    <h2>Admin Data Update Form</h2>

    <form action="./dbAdminUpdate.php" method="post">     
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?=$email?>">
        </div>
        
        <div>
            <button type="submit">Update</button>
        </div>
    </form>

</body>
</html>