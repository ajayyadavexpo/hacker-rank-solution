<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
$h = 0;
$l = 0;
$a = $scores[0];
for($i=1;$i<count($scores);$i++){
    if($a < $scores[$i]){
        $a = $scores[$i];
        $h++;
    }
}
$a = $scores[0];
for($i=1;$i<count($scores);$i++){
    if($a > $scores[$i]){
        $a = $scores[$i];
        $l++;
    }
}
return array($h,$l);



}
