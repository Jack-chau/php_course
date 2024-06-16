<?php

    $width = 10;
    $length = 20;

    function calculateArea($width, $length){  // complete the function
        $area = $length * $width;
        return $area;
    }
    echo "The width is " . $width . "<br>";
    echo "The length is " . $length . "<br>";
    echo "The area of rectangle is " . calculateArea($width,$length);
?>