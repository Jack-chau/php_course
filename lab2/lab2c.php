<?php
    $rows = 3;
    $columns = 10;
    for($i = 0; $i < $rows; $i++) {
    
        for( $k = 0; $k < $i; $k++ ){
            echo "&nbsp" ;
        }		// insert space(&nbsp;) before "*"

        for($j = 0; $j < $columns - $i - $k; $j++) {
            echo "*";
        }
    echo "<br/>";
    }
?>