<?php
    require_once "./inc/db.inc.php" ;
    $pdo = dbconnect( ) ;

    try{
        // $sql = "SELECT id, name, class, updated_at FROM student " ;
        $sql = "SELECT student.id, student.name, class.name AS classname, student.updated_at  FROM student " ;
        $sql .= " INNER JOIN class on student.class = class.id" ;
        $stmt = $pdo->prepare( $sql ) ;
        $stmt->execute( ) ;
    } catch( PDOException $e ){
        die( $e->getMessage( ) ) ;
    }
?>
<html>
    <head></head>
    <body>
        <h1>Select All Student</h1>
        <?php
            $numFound = $stmt->rowCount( ) ;
            echo "<p>" . $numFound . " Student(s) found </p>" ;
            if( $numFound > 0 ){
                echo "<table border='1'>\n" ;
                    echo "<tr>\n" ;
                        echo "<td>ID</td>" ;
                        echo "<td>Name</td>" ;
                        echo "<td>Class</td>" ;
                        echo "<td>Update At</td>\n" ;
                        echo "<td>Action</td>\n" ;
                    echo "</tr>\n" ;
                    while( $result = $stmt->fetch( ) ){
                        echo "<tr>\n" ;
                            echo "<td>" . $result[ 'id' ] . "</td>\n" ;
                            echo "<td>" . $result[ 'name' ] . "</td>\n" ;
                            echo "<td>" . $result[ 'classname' ] . "</td>\n" ;
                            echo "<td>" . $result[ 'updated_at' ] . "</td>\n" ;
                            echo "<td>" ;
                                echo "<a href='frmupdate.php?id=" . $result[ 'id' ] . "'>Update </a>" ;
                                echo "<a href='dbdelete.php?id=" . $result[ 'id' ] . "'>Delete</a>" ;
                            echo "</td>" ;
                        echo "</tr>\n" ;
                    }
                echo "</table>\n" ;
            }
        ?>
        <p><a href="frminsert.php">Insert Student</a></p>
    </body>
</html>