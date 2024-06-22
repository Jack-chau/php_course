<?php

$fruit = 'watermelon'; // Example value

//if statement

if ($fruit == 'apple') {
    echo "I love apple";
} elseif ($fruit == 'banana') {
    echo "I love banana";
} elseif ($fruit == 'orange') {
    echo "I love orange";
} else {
    echo "None of above";
}

echo "<br>" ;
// switch statement
switch ($fruit) {
    case 'apple':
        echo "I love apple";
        break;
    case 'banana':
        echo "I love banana";
        break;
    case 'orange':
        echo "I love orange";
        break;
    default:
        echo "None of above";
}
