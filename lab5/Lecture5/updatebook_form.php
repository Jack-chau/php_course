<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php";
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !array_key_exists("isbn", $_GET) ) {
  header('location: displaybooks.php');
  exit();
}
$isbn = $_GET["isbn"];

try {
  /* 3. Prepare and execute SQL . . . */
  $sql =  "SELECT * from books ";
  $sql .= " WHERE isbn = :isbn ";
  $stmt = $pdo->prepare($sql);

  /* 4. Check result . . . */
  $stmt->bindParam(":isbn", $isbn);
  $stmt->execute();
  if( $stmt->rowCount() == 0 ) {
    // student not found
    header('location: displaybooks.php');
    exit();
  }
  $result = $stmt->fetch();
  $isbn = $result["isbn"];
  $bookname = $result["bookname"];
  $author = $result["author"];
  $publishDate = $result["publishDate"];

} catch (PDOException $e) {
  die($e->getMessage());
}
?>
<!-- 5. Show result . . . -->
<html>
<head></head>
<body>
<h1>Update Student</h1>
<form method="post" action="updatebook.php?isbn=<?=$isbn?>">
    <p>
      <label for="isbn">isbn:</label>
      <input type="text" id="isbn" name="isbn" required disabled value="<?=$isbn?>">
    </p>
    <p>
      <label for="bookname">bookname:</label>
      <input type="text" id="bookname" name="bookname" required value="<?=$bookname?>">
    </p>
    <p>
      <label for="author">author:</label>
      <input type="text" id="author" name="author" required value="<?=$author?>">
    </p>
    <p>
      <label for="publishDate">publishDate:</label>
      <input type="date" id="publishDate" name="publishDate" required value="<?=$publishDate?>">
    </p>
    <p>
      <input type="submit" value="Update">
    </p>
</form>

<p><a href="dbstu.php">Select All students</a></p>
</body>
</html>
