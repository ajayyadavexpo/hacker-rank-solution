<?php

// Complete the solve function below.
function solve($s, $d, $m) {

$count = 0;
$sum = 0;
if($m == 1){
    for($i=0;$i<count($s);$i++){
        if($s[$i] == $d){
            $count++;
        }
    }
}else{
    for($i=0;$i<count($s)-$m+1;$i++){
        for($j=$i;$j<($i+$m);$j++){
            $sum = $sum+$s[$j];
            echo $s[$j]." + "; 
        }
        echo $sum." , ";
        echo "<br>";
        if($sum == $d){
            $count++;
            $sum = 0;
        }
        $sum = 0;
    }
}
return $count;

}
