<?php
$marks = array(50, 80, 65);

var_dump($marks); echo "<br/>";
echo "<br/>".$marks[0]." ".$marks[1]." ".$marks[2]."<br/>";

$names = array("lastName" => "Chan",
			"firstName" => "Siu Ming");

echo $names["lastName"]." ".$names["firstName"]."<br/>";

foreach($names as $key => $name) {
	echo $key." is ".$name."<br/>";
}

echo '<table border="1">'; // echo "<table border=\"1\">"
foreach($names as $key => $name) {
echo "<tr><td>".$key."</td><td>".$name."</td></tr>";
}
echo "</table>";
