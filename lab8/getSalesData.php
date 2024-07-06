<?php
    require_once "./inc/db.inc.php" ;
    
    header( 'Content-Type: application/json; charset=utf-8' ) ;

    if( $_SERVER[ 'REQUEST_METHOD' ] === 'GET' ) {
        $pdo = dbconnect( );

        try{
            $sql = 'SELECT * FROM productsales' ;
            $stmt = $pdo -> prepare( $sql ) ;
            $stmt -> execute( ) ;
            
            $result = $stmt -> fetchAll( PDO::FETCH_ASSOC ) ;
            $response = json_encode( $result ) ;
            echo $response ;
            die( ) ;
        } catch( PDOException $e ){
            die( $e -> getMessage( ) ) ;
        }
    }

?>