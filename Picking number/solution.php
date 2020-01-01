<?php

// Complete the pickingNumbers function below.
function pickingNumbers($a) {

$length = 0;
sort($a);
$now = $a[0];
$longest = 0;
for($i=0;$i<count($a);$i++){
    $value = $a[$i];
    if ($value - $now <= 1){
        $length= $length+1;
        if ($length > $longest){
            $longest = $length;
        }
    }
    else{
        $length = 1;
        $now = $value;
    }
}
    
echo $longest;


}
