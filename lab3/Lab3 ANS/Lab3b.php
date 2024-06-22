<?php
$subjects = array(
	"sem1" => array("Prog", "DP", "NF", "Eng", "SDD"),
	"sem2" => array("IP", "DMS", "OOP", "SA"),
	"sem3" => array("INSP", "SAP", "ITP"),
);

$maxSubjNum = 0;	// max # of subjects
// loop the array
foreach ($subjects as $subjArr) {
	// find # of subjects
	$subjNum = count($subjArr);
	
	//compare
	if($subjNum > $maxSubjNum){
        //save
        $maxSubjNum = $subjNum;
    }
}
echo "Max: ".$maxSubjNum;

// start a table
echo "<table border='1'>";

// loop the array
foreach ($subjects as $sem => $subjArr) {
 
	// start a table row
	echo "<tr>";
	
	// show semester name in a <td>
	echo "<td>".$sem."</td>\n";
	
	// show number of subjects in a <td>
	echo "<td>".count($subjArr)."</td>\n";	

    foreach ($subjArr as $subj) {
		// print subject in <td>
		echo "<td>".$subj."</td>\n";
	}

    // find num of empty <td>
    $tdNum = $maxSubjNum - count($subjArr);
        
    // loop and create empty <td>
    for($i=0 ; $i<$tdNum;$i++) {
        echo "<td>&nbsp;</td>";
    }

	// end the table row	
	echo "</tr>";
}
// end the table
echo "</table>";
