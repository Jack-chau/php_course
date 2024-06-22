<?php
session_start();

if ( !array_key_exists('expiry',$_SESSION)  || time() > $_SESSION['expiry'] ) { 
// check the user whether logged in or session is expired
 
session_destroy();
session_unset();
 
 // redirect to login form
 header('Location: login_form.php');
 exit();
}
// show content to logged in users
