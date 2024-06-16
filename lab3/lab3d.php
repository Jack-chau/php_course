<?php
    $class = [
        "Year1" => [ "1A" => 20, "1B" => 30, "1C" => 33 ],
        "Year2" => [ "2A" => 25, "2B" => 25 ],
        "Year3" => [ "3A" => 34 ],
        "Year4" => [ "4A" => 20 ],
    ] ;

    foreach( $class as $year => $grade ){
        echo $year . "<br>" ;
        foreach( $grade as $cls => $students ){
            echo "{$cls} {$students}<br>";
        }
        echo "<br>";
    }

?>