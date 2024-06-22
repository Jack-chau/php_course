<?php
$multipleOf = 3;			// find multiples of 3
$checkLimit = 1000;			// check 1 to 1000 only
$multiReq = 10;			// num of multiples required

$checkingNum = 1;			// checking number
$found = 0;				// num of multiples found

$count = 0;
for($i=1 ; $i<=1000 ; $i++ ){

    if($i %$multipleOf==0){
        echo $i." ";
        $count ++;
        if($count == $multiReq){	
            break;				// yes, quit the loop
        }
    }
}
echo "</br>";
// loop 1 to 1000
while($checkingNum <= 1000) {

	// check if $checkingNum is a multiple
	if($checkingNum % $multipleOf == 0) {			
		echo $checkingNum." ";	// Yes, echo the result
		$found = $found+1;		// update the found counter
	}
	
	// check if $multiReq multiples found
	if($found == $multiReq){	
		break;				// yes, quit the loop
	}
	
	$checkingNum++;			// update the checking number
    //$checkingNum = $checkingNum +1;
}
