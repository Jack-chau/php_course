<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Registration Form</title>
</head>
<body>
    <h2>Admin Registration Form</h2>

    <form action="./registration_submit.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
        </div>
        
        <div>
            <button type="submit">Register</button>
        </div>
    </form>

</body>
</html>