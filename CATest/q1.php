<?php
    function calculate( $n ){
        for( $i=1; $i <= $n ; $i++ )
            echo "{$i} * {$i} =" . $i * $i . "<br>";
    }
    calculate( 10 ) ;
?>