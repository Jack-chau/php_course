<html>
<head></head>
<body>
Member Registration Form
<form method="post" action="lab4d_submit.php">
<p>Email: <input type="email" name="email"/><br>
password: <input type="password" name="password"/><br>
Date of Birth<input type="date" name="dob" /><br>
Gender:<input type="radio" name="gender" value="M"/>Male
<input type="radio" name="gender" value="F"/>Female
<br>
interest: <input type="checkbox" name='interest[]' value="Sport"/>Sport
<input type="checkbox" name='interest[]' value="Food"/>Food
<input type="checkbox" name='interest[]' value="sport"/> Video Game
<br>
address line1: <input type="text" name="address1" /><br>
address line2: <input type="text" name="address2" /><br>
<br>
<input type="submit" name="submit"/>
</p>
</form>
</body>
