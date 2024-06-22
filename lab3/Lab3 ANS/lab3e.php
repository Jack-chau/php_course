<?php

$marks = array( 
    array("Sam",50,50,50),
    array("Brian",100,50,75),
    array("Chrim",100,100,100),
    array("James",40,40,40)
);       

for($i =0; $i<count($marks);$i++){
    for($j =0; $j<count($marks[$i]);$j++){
        echo$marks[$i][$j];
    }
    echo "<br>";
}
echo "<hr>";
foreach($marks as $item){
    foreach($item as $data){
        echo $data;
    }
    echo "<br>";
}
