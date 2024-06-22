<?php

$width = 10;
$length = 20;

function calculate($width, $length){
    return $width * $length;
}
echo "The width is ".$width ."</br>";
echo "The length is ".$length."</br>";;
echo "The area of rectangle is ".calculate($width,$length);