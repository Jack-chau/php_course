<html>
<head></head>
<body>

<form method="post" action="lab4c_submit.php">

	<h1>Survey</h1>
	<p>Full Name: <input type="text" name="name"/></p>

	<p>Gender:
		<input type="radio" name="gender" value="M"/> Male
		<input type="radio" name="gender" value="F"/>Female</p>

	<p>Class:
		<select name="class" >
			<option value="a">1A</option>
			<option value="b">1B</option>
		</select></p>

	<p>Studying subjects:
		<input name="subj[]" type="checkbox" value="ITP4905"/> Object Oriented Programming
		<input name="subj[]" type="checkbox" value="ITP4410"/> Internet Programming
		<input name="subj[]" type="checkbox" value="ITP4413"/> Server Administration</p>

	<p><input type="submit" name="submit" /> <input type="reset"/></p>

</form>

</body>
</html>
