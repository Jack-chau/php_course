<?php
    echo password_hash( '123', PASSWORD_DEFAULT ) ;
    session_start( ) ;
    //var_dump( $_COOKIE ) ; 
    // setcookie( 'lang', 'en', time( ) + 300 ) ;
    var_dump( $_SESSION ) ;
    date_default_timezone_set('Asia/Hong_Kong') ;
    echo 'Expiry: ' . date( DateTime::COOKIE, $_SESSION['expiry'] ) ;
    echo 'NOW: ' . date( DateTime::COOKIE, time( ) ) ;
?>
