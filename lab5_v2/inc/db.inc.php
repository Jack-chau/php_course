<?php
$dsn ='mysql:dbname=school;host=localhost;charset=UTF8';
$dbuser = 'root';
$dbpwd = 'Jack0303';

function dbconnect( ){
    try{
        global $dsn, $dbuser, $dbpwd ; // data source name, dbuser, dbpassword
        $pdo = new PDO( $dsn, $dbuser, $dbpwd ) ; // php data object
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ) ;
        return $pdo ; //close collection
    } catch( PDOExeption $e ) { //$e variable for PDO return error message
        die( 'Database Error' ) ; //kill the collection
    }
}





/*
function dbconnect() {
 try {
    global $dsn, $dbuser, $dbpwd;
    $pdo = new PDO($dsn, $dbuser, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
 } catch (PDOException $e) {
 die('Database Error');
 }
}
*/