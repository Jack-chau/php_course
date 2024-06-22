<?php

$name = "Sam Yau";
$name2 = "Leon!@#";
$pattern ="/^[a-zA-Z' ]*$/" ;

if (!preg_match($pattern,$name)) {
  echo "Only letters and white space allowed";
}
if (!preg_match($pattern,$name2)) {
    echo "Only letters and white space allowed";
}
?>