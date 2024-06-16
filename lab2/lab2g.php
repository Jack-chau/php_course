<?php
    $fruit = 'apple'; // Example value

    //if statement
    if($fruit === 'apple' ){
        echo "I love apple" ;
        echo "<br>" ;
    }else if($fruit === 'banana'){
        echo "I love banana" ;
        echo "<br>" ;
    }else if($fruit === 'orange'){
        echo "I love orange" ;
        echo "<br>" ;
    }else{
        echo "None of above" ;
        echo "<br>" ;
    }


    // switch statement
    switch( $fruit ){
        case 'apple':
            echo "I love apple" ;
            echo "<br>" ;
            break;
        case 'banana':
            echo "I love banana" ;
            echo "<br>" ;
            break;
        case 'orange':
            echo "I love orange" ;
            echo "<br>" ;
            break;
        default:
        echo "None of above" ;
        echo "<br>" ;        
    }
?>