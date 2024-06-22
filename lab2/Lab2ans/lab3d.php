<?php

$multipleOf = 3;			// find multiples of 3
$checkLimit = 1000;			// check 1 to 1000 only
$multiReq = 10;			// num of multiples required

$checkingNum = 1;			// checking number
$found = 0;				// num of multiples found

// loop 1 to 1000
while($checkingNum <= $checkLimit) {

	// check if $checkingNum is a multiple
	if($checkingNum % $multipleOf == 0) {
		echo $checkingNum." ";	// Yes, echo the result
		$found++;				// update the found counter
	}

	// check if $multiReq multiples found
	if($found == $multiReq){
		break;				// yes, quit the loop
	}

	$checkingNum++;				// update the checking number
}

echo "<br/>";

$checkingNum = 1;			// checking number
$found = 0;				// num of multiples found

// loop 1 to 1000
for( ; $checkingNum <= $checkLimit;$checkingNum++) {

	// check if $checkingNum is a multiple
	if($checkingNum % $multipleOf == 0) {
		echo $checkingNum." ";	// Yes, echo the result
		$found++;				// update the found counter
	}

	// check if $multiReq multiples found
	if($found == $multiReq){
		break;				// yes, quit the loop
	}
}
