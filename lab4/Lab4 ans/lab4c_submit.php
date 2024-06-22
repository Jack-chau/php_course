<html>
<head></head>
<body>
<?php
function print_data($title, $data) {

  if(is_array($data)) {
  	print_array($title, $data);
	return;
  }

  $data = htmlspecialchars(trim($data));
  if( $data !== "" ) {
    echo "  <tr>";
    echo "    <td>".$title."</td>";
    echo "    <td>".$data."</td>";
    echo "  </tr>";
  }
}

function print_array($title, $data) {
	foreach ($data as $key => $value) {
		$data[$key] = htmlspecialchars(trim($data[$key]));
	}

	echo "  <tr>";
	echo "    <td>".$title."</td>";
	echo "    <td>".implode(',', $data)."</td>";
	echo "  </tr>";
}


if( array_key_exists('submit', $_POST)  ) {
  //var_dump($_POST);
  echo "<table border='1'>";

  echo "  <tr style='font-weight:bold'>";
  echo "    <td>Element</td>";
  echo "    <td>Value</td>";
  echo "  </tr>";

  if(array_key_exists('fullname', $_POST) ) {
	  print_data("Fullname", $_POST['fullname']);
  }

  if( array_key_exists('gender', $_POST)) {
	print_data("Gender", $_POST['gender']);
  }

  if( array_key_exists('class', $_POST)) {
	print_data("Class", $_POST['class']);
  }

  if( array_key_exists('subject',$_POST )) {
	print_data("Studying subjects",$_POST['subject']);
  }

  echo "</table>";
}
?>
<p><a href="lab4c_form.php">Back the form</a></p>
</body>
</html>


