<?php
require_once './inc/db.inc.php';

try {
    // Create a new PDO connection
    $pdo = dbconnect();
    // Check if the form is submitted
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        //Task2-3.1 receive the data from post method and trim it
        $username = trim( $_POST['username'] );
        $email =  trim($_POST['email'] );
        $password =  trim( $_POST['password'] );
        //Task2-3.2 Validate the data
        if (empty($username) || empty($password) || empty($email)) {
            echo "<script>alert('Username, password and email are required\\nClick the confirm button will redirect you to the previous page'); window.history.go(-1);</script>";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('Invalid email format\\nClick the confirm button will redirect you to the previous page'); window.history.go(-1);</script>";
        } else {
       
            try {
                $options = [
                    'cost' => 12 
                ];
                //Task2-3.3	Create hashed password:
                $hashed_password = password_hash( $password, PASSWORD_DEFAULT, $options );

                //Task2-3.4 Prepare an insert statement
                $stmt = $pdo->prepare("INSERT INTO admin (username, email, password) VALUES (:username, :email, :password)");

                //Task2-3.5 Bind parameters, username, email and hashed password
                $stmt->bindParam( ':username', $username );
                $stmt->bindParam( ':email', $email );
                $stmt->bindParam( ':password', $hashed_password );

                // Execute the prepared statement
                $stmt->execute();
                echo "<script>alert('Registration successful\\n Now will redirect you to login page'); window.location.href='login_form.php';</script>";
            }catch(PDOException $e) {
                die($e->getMessage());
            }
        }
    }else{
        echo "<script>alert('Missing input!\\nClick the confirm button will redirect you to the previous page'); window.history.go(-1);</script>";
    }
} catch(PDOException $e) {
    echo "<script>alert('Error: " . $e->getMessage() . "'); window.history.go(-1);</script>";
} finally {
    // Close connection
    $pdo = null;
}
?>