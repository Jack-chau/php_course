<?php

$marks = array( 
    "student1"=>array("Name"=>"Sam","CA"=>50,"EA"=>50,"Total"=>50),
    "student2"=>array("Name"=>"Brian","CA"=>100,"EA"=>50,"Total"=>75),
    "student3"=>array("Name"=>"Chris","CA"=>39,"EA"=>39,"Total"=>39),
    "student4"=>array("Name"=>"James","CA"=>40,"EA"=>40,"Total"=>40)
);       


foreach($marks as $key => $item){
    echo "$key <br>";
    foreach($item as $tag => $data){
        echo "$tag : $data ";
    }
    echo "<br>";
    if ($item["Total"] >= 70) {
        echo 'A grade';
    } elseif ($item["Total"] >= 60 && $item["Total"] < 70) {
        echo 'B grade';
    } elseif ($item["Total"] >= 50 && $item["Total"] < 60) {
        echo 'C grade';
    } elseif ($item["Total"] >= 40 && $item["Total"] < 50) {
        echo 'D grade';
    } else {
        echo 'F grade';
    }
    echo "<hr>";
}
echo "<br>";