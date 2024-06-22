<?php
require_once './inc/db.inc.php';

ini_set('session.cookie_httponly', 1);

// start the session

try {
    // Create a new PDO connection
    $pdo = dbconnect();
    // Check if the form is submitted
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Validate and sanitize input data
        $username = trim($_POST['username']);
        $password =  trim($_POST['password']);

        if (empty($username) || empty($password)) {
            echo "<script>alert('Username, password and email are required\\nClick the confirm button will redirect you to the previous page'); window.history.go(-1);</script>"; 
        } else {
            try {
                //Task3-2 select the user data
                
                
                // Check if user exists
                if ($stmt->rowCount() == 1) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    //var_dump($user);

                    //Task3-3.1 use password_verify function to verify the password whether is match
                    if (__??__) {
                        //Task3-3.2 use session_regenerate_id to regenerate session ID
                       __??__

                        //Task3-3.3 Use time function to get the current time and add 15 mins then store it into session
                        $_SESSION["expiry"] = __??__ ; 
                        $_SESSION['adminID'] = __??__ ; //Task3-3.3 Store the adminID into the session
                        
                        // Redirect user to dbstu.php
                        echo "<script>alert('Login successful\\n Now will redirect you to dbstu page'); window.location.href='dbstu.php';</script>";
                        exit;
                    } else {
                        // Display an error message if password is not valid
                        echo "<script>alert('Incorrect username or password');window.history.go(-1);</script>";
                    }
                } else {
                    // Display an error message if username doesn't exist
                    echo "<script>alert('Incorrect username or password.');window.history.go(-1);</script>";
                }

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