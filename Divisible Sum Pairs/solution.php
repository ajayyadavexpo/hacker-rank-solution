<?php

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {
$count = 0;
$sum = 0;
for($i=0;$i<$n-1;$i++){
    for($j=$i+1;$j<$n;$j++){
        $sum = $ar[$i] + $ar[$j];
        if($sum % $k == 0){
            $count++;
        }
    }
}
return $count;

}
