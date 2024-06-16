<?php

    $marks = array( 
        array("Sam",50,50,50),
        array("Brian",100,50,75),
        array("Chrim",100,100,100),
        array("James",40,40,40)
    );       
    // Insert the for loop below
    for( $i=0; $i<count( $marks ); $i++ ){
        for( $k=0; $k< count($marks[$i]); $k++ ){
            echo $marks[ $i ][ $k ] ;
        }
        echo "<br>" ;
    }

    echo "<hr>";
    // Insert the for each loop below
    foreach( $marks as $key => $value ){
        foreach( $value as $student => $stdMarks ){
            echo $stdMarks ;
        }
        echo "<br>";
    }
?>