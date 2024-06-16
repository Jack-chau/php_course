<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><td>lastName</td><td>Chan</td></tr>
        <tr><td>firstName</td><td>Siu Ming</td></tr>
    </table>
    
</body>
</html>
-->
<?php
/*
    $marks = array( 50, 80, 65 ) ;
    var_dump( $marks );
    echo "<br/>" ;
    echo "{$marks[ 1 ]}  {$marks[ 0 ]}  {$marks[ 2 ]}<br/>" ;
    
    $names = array( "lastName" => "Chan", "firstName" => "Siu Ming" ) ;
    echo "{$names[ "lastName" ]} {$names["firstName"]}<br/>";
    
    // Doesn't work
    //for( $i=0 ; $i<count( $names ) ; $i++ ){
        //    echo $names[ $i ] ;
        //}
        foreach( $names as $key => $name ) {
            echo $key . " is " . $name."<br/>";
        }
*/
    $names = array( "lastName" => "Chan", "firstName" => "Siu Ming" ) ;

    echo "<table border='1'>" ;
    foreach( $names as $key => $name ){
        echo "<tr><td>{$key}</td><td>{$name}</tr></td>";
    }
    echo "</table>" ;
?>