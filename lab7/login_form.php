<?php

session_start();

session_destroy();
session_unset();
?>
<html>
<head></head>
<body>

<form method="post" action="./login_submit.php">
<p>Username: <input type="text" name="username" /></p>
<p>Password: <input type="password" name="password" /></p>
<p><input type="submit" value="Login" /></p>
<p><a href="dbstu.php">Select All Students</a></p>
<p><a href="frmupdate.php?id=1">Update - Form</a></p>

</form>
</body>
</html>
