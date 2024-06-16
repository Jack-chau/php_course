<?php
    if(array_key_exists('username', $_POST) && trim($_POST['username']) !== "" ) {
        //var_dump($_POST);
        echo 'Hello, ',$_POST['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <p>Username: <input type="text" name="username"/>
        <input type="submit" name="submit" value="submit"/></p>
</form>
</body>
</html>