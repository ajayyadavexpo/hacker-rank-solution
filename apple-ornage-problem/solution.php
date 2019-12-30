<?php

// Complete the countApplesAndOranges function below.
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {

$ap = 0;
$or = 0;
$x = 0;
$y = 0;
for($i=0;$i<count($apples);$i++){
    $x = $apples[$i] + $a;
    if(($x>=$s) && ($x <= $t)){
        $ap = $ap+1;
    }
}
for($j=0;$j<count($oranges);$j++){
    $y = $oranges[$j] + $b;
    if(($y>=$s) && ($y <= $t)){
        $or = $or+1;
    }
}
    echo $ap."\n";
    echo $or;
    
}
