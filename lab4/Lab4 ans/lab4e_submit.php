<?php

$userNameReg ="/^[a-zA-Z0-9]+$/" ;
$passwordReg = "/^[a-zA-Z0-9@]+$/";
$phoneReg ="/^\d{8}$/" ;
$username = "";
$password = "";
$phone = "";
$address = "";
$gender ="";
$interest =[];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   

    // Check if username is set in POST data
    if(isset($_POST['username'])){    
        // Trim whitespace from the username and assign the corresponding data into variable $username
        $username = trim($_POST['username']);       
        // Check if username is empty after trim
        if(empty($username)){
            $errors[] = 'User name is required.';
        }else{
            // Validate the username against the regex pattern
            if (!preg_match($userNameReg,$username)) {
                $errors[] = "The username allows letters and number only";
            }
        }
    }else{
        // Add an error message if the username field is not set at all
        $errors[] = 'User name is required.';
    }

    // Task 1 Password validation
    if (isset($_POST['password'])) {
        $password = trim($_POST['password']);
        if (empty($password)) {
            $errors[] = 'Password is required.';
        } else {
            if (!preg_match($passwordReg, $password)) {
                $errors[] = "The password allows letters, numbers, and the '@' symbol only.";
            }
        }
    } else {
        $errors[] = 'Password is required.';
    }
 
    // Phone validation
    if (isset($_POST['phone'])) {
        $phone = trim($_POST['phone']);
        if (empty($phone)) {
            $errors[] = 'Phone is required.';
        } else {
            if (!preg_match($phoneReg, $phone)) {
                $errors[] = "The phone allows 8 digits only.";
            }
        }
    } else {
        $errors[] = 'Phone is required.';
    }

    // Address validation
    if (isset($_POST['address'])) {
        $address = trim($_POST['address']);
        if (empty($address)) {
            $errors[] = 'Address is required.';
        }
    } else {
        $errors[] = 'Address is required.';
    }

    // Gender validation
    // Check if gender is set in POST data
    if (!isset($_POST['gender'])) {
        $errors[] = 'Please select your gender.';
    }else{
        $gender = $_POST['gender'];
    }

    // Task 3 Interest validation
    if (!isset($_POST['interest'])) {
        $errors[] = 'Please select at least one interest.';
    } else {
        $interest = $_POST['interest']; 
    }

    // If there are no errors, process the form data
    if (count($errors) === 0) {
             
        echo 'Registration successful!<br>';
        echo "Username: $username <br>";
        echo "Password: $password <br>";
        echo "Phone: $phone <br>";
        echo "Address: $address <br>";
        echo "Gender: $gender <br>";
        echo "Interest: <br>";
        foreach ($interest as $item){
            echo "$item <br>";
        }
    } else {
        // There are errors, display them
        foreach ($errors as $error) {
            echo '<p style="color: red;">Error: ' . htmlspecialchars($error) . '</p>';
        }
    }
} else {
    
    echo 'Please Submit the data from lab4e_form.html';
}
?>