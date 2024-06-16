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


if( $_POST["submit"] == true ) {
  //var_dump($_POST);

  echo "<table border='1'>";

  echo "  <tr style='font-weight:bold'>";
  echo "    <td>Element</td>";
  echo "    <td>Value</td>";
  echo "  </tr>";

  if( $_POST["name"] != null ) {
	  print_data("Fullname", $_POST["name"] );
  }

  if( $_POST["gender"] != null ){
	  print_data("Gender", $_POST["gender"]);
  }
  if( $_POST["class"] != null ) {
    print_data("Class", $_POST["class"] );
  }
  if( array_key_exists("subj", $_POST ) ){
	  print_data("Studying subjects", $_POST["subj"]) ;
  }

  echo "</table>";
}
?>
<p><a href="lab4c_form.php">Back the form</a></p>
</body>
</html>
