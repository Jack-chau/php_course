<?php

$marks = array( 
    "student1"=>array("Name"=>"Sam","CA"=>50,"EA"=>50,"Total"=>50),
    "student2"=>array("Name"=>"Brian","CA"=>100,"EA"=>50,"Total"=>75),
    "student3"=>array("Name"=>"Chris","CA"=>39,"EA"=>39,"Total"=>39),
    "student4"=>array("Name"=>"James","CA"=>40,"EA"=>40,"Total"=>40)
);       


foreach( $marks as $student => $stdMarks ){
    echo $student ;
    echo "<br>";
    echo "Name: {$stdMarks["Name"]} CA: {$stdMarks["CA"]} Total: {$stdMarks["Total"]}<br>" ;
    
    if( $stdMarks["Total"] >= 70 ){
        echo "A Grade" ;
    }
    elseif( $stdMarks["Total"] >= 60 && $stdMarks["Total"] < 70 ){
        echo "B Grade" ;
    }
    elseif( $stdMarks["Total"] >= 50 && $stdMarks["Total"] < 60 ){
        echo "C Grade" ;
    }
    elseif( $stdMarks["Total"] >= 40 && $stdMarks["Total"] < 50 ){
        echo "D Grade" ;
    }
    else{
        echo "F Grade" ;
    }

    echo "<hr>";
}
echo "<br>";