<?php
/* 1. Connect to the database */
require_once "../inc/db.inc.php"; // the path should change depends on your folder structure 
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !array_key_exists( "id", $_GET ) ) {
  header('location: dbstu.php');
  exit();
}
$id = $_GET['id'] ;
try {
 /* 3. Prepare and execute SQL . . . */
  $sql =  "SELECT id, name, class FROM student" ;
  $sql .= " WHERE id = :id ";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":id", $id);
  $stmt->execute();


 /* 4. Check result . . . */
 if( $stmt->rowCount() == 0 ) {
  // student not found
  header('location: dbstu.php');
  exit();
}
$result = $stmt->fetch();
$id = $result['id'];
$name = $result['name'];
$class = $result['class'];
} catch (PDOException $e) {
 die($e->getMessage());
}
?>

<html>
<head></head>
<body>
<h1>Update Student</h1>
<form method="post" action="dbupdate.php">
  <p>ID: <input type="text" name="id" value="<?=$id?>" disabled /></p>
  <p>Name: <input type="text" name="name" value="<?=$name?>"/></p>
  <p>Class: <input type="text" name="class" value="<?=$class?>"/></p>
  <p><input type="submit" /></p>
</form>

<p><a href="dbstu.php">Select All students</a></p>
</body>
</html>
