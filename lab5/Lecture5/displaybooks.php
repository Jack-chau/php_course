<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php"; // the path should change depends on your folder structure 
$pdo = dbconnect();

/* 2. Validate and get data . . . */

try {
 /* 3. Prepare and execute SQL . . . */
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

 /* 4. Check result . . . */
    if($stmt->rowCount() < 1) {
        echo "No record found";
    } else { 
        echo $stmt->rowCount().' record(s) found.';
        echo "<table border='1'>\n";

        while ($result = $stmt->fetch()) {
            
            echo " <tr>\n";
            echo ' <td>'.$result['isbn']."</td>\n";
            echo ' <td>'.$result['bookname']."</td>\n";
            echo ' <td>'.$result['author']."</td>\n";
            echo ' <td>'.$result['publishDate']."</td>\n";
            echo "<td>";
            echo "<a href='updatebook_form.php?isbn=".$result['isbn']."'>Update book</a> ";
            echo "<a href='deletebook.php?isbn=".$result['isbn']."'>Delete book</a>";
            echo "</td>\n";
            echo " </tr>\n";
        }
        echo "</table>\n";
    }
} catch (PDOException $e) {
 die($e->getMessage());
}
?>


