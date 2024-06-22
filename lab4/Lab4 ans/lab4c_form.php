<html>
<head></head>
<body>

<form method="post" action="lab4c_submit.php">

	<h1>Survey</h1>
	<p>Full Name: <input name ='fullname' type="text" /></p>

	<p>Gender:
		<input type="radio" name="gender" value="M"/> Male
		<input type="radio" name="gender" value="F"/>Female</p>

	<p>Class:
		<select name='class'>
			<option value="a" >1A</option>
			<option value="b" >1B</option>
		</select></p>

	<p>Studying subjects:
		<input type="checkbox" name='subject[]' value="ITP4905"/> Object Oriented Programming
		<input type="checkbox" name='subject[]' value="ITP4410"/> Internet Programming
		<input type="checkbox" name='subject[]' value="ITP4413"/> Server Administration</p>

	<p><input type="submit" name="submit" /> <input type="reset"/></p>

</form>

</body>
</html>
