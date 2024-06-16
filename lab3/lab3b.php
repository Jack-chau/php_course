<?php
    $subjects = [
        "sem1" => [ "Prog", "DP", "NF", "Eng", "SDD" ],
        "sem2" => [ "IP", "DMS", "OOP", "SA" ],
        "sem3" => [ "INSP", "SAP", "ITP" ]
    ] ;
    // var_dump( $subjects ) ;

    $maxSubjNum = 0 ;
    foreach( $subjects as $key => $subjArr ){
        $subjNum = count( $subjArr ) ;
        if( $subjNum > $maxSubjNum ){
            $maxSubjNum = $subjNum ;
        }
    }
    echo "Max: " . $maxSubjNum ;

    echo "<table border='1'>" ;
    
    foreach( $subjects as $sem => $subjArr ){
        echo "<tr>" ;
        echo "<td>" . $sem . "</td>\n" ;
        //echo"<td>" . count($subjArr) . "</td>\n" ;
        foreach( $subjArr as $subj ) {
            echo "<td>" . $subj . "</td>\n" ;
        }
        $tdNum = $maxSubjNum - count( $subjArr ) ;
        for( $i = 0 ; $i < $tdNum ; $i++ ){
            echo "<td>&nbsp;</td>";
        }
        echo "</tr>" ;
    }
    echo "</table>" ;
?>