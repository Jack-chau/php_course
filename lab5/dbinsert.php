<?php
/* 1. Connect to the database */
require_once "./inc/db.inc.php" ; // the path should change depends on your folder structure 
require_once "./frminsert.php" ;
$pdo = dbconnect();

/* 2. Validate and get data . . . */
if( !isset( $_POST[ 'name '] ) ||
    !isset( $_POST[ 'class' ] )){
    header( 'location: dbstu.php' ) ;
    exit( ) ;
}
$name = $_POST['name'];
$class = $_POST['class'] ;
try {
 /* 3. Prepare and execute SQL . . . */
    $sql = 'INSERT INTO student (name, class)' ;
    $sql .= " VALUES(:name, :class) " ;
    $stmt = $pdo -> prepare( $sql ) ;
    $stmt -> bindParam( ":name", $name ) ;
    $stmt -> bindParam( ":class", $class) ;
    $stmt -> execute( ) ;
 /* 4. Check result . . . */
    if( $stmt -> rowCount( ) == 1 ){
        $queryString = "t=" . $pdo -> lastInsertId( ) ; //ok
    } else {
        $queryString = "f=" . $name; //fail
    }
    header( 'location :msginsert.php?' . $queryString ) ;
    exit( ) ;
} catch (PDOException $e) {
 die($e->getMessage());
}
?>
<html><head>. . .
<!-- 5. Show result . . . -->
