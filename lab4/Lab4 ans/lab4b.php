<html>
<head></head>
<body>
<form method="post" action="">
  <p>Username: <input type="text" name="username" />
     <input type="submit" name="submit" /></p>
</form>
</body>
</html>
<?php
//var_dump($_GET);
if( array_key_exists('submit', $_POST) && trim($_POST['username']) !== ""
) {
    //var_dump($_POST);
    echo 'Hello, ',$_POST['username'];
}

?>
