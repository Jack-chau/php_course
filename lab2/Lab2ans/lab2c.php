<?php
$rows = 3;
$columns = 10;
for($i = 0; $i < $rows; $i++) {

    for($j = 0; $j < $i; $j++) {
        echo "&nbsp";
    }
    for($j = 0; $j < $columns-$i; $j++) {
        echo "*";
    }
  echo "<br/>";
}


