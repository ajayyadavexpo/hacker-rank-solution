<?php

/*
 * Complete the getTotalX function below.
 */
function getTotalX($a, $b) {
    /*
     * Write your code here.
     */
    $y = 0;
$c = 0;
$arr = array();
$count = 0;
// checking if any number between 6 and 24 is divisable factor in array a;
for($i = $a[1]; $i<=$b[0]; $i++){
    $len = count($a);
    for($x=0;$x<$len;$x++){
        if($i % $a[$x] == 0){
            $y = $i;    
        }else{
            $y = "";
            break;
        }
    }
    if($y != ""){
        $arr[$c] = $y;
        $c++;
    }
}
for($i=0;$i<count($arr);$i++){
    for($j = 0;$j<count($b);$j++){
        if($b[$j] % $arr[$i] == 0){
            $z = $arr[$i];
        }else{
            $z = "";
            break;
    }
    }
    
    if($z != ""){
        $count++;
    }

}
    return $count;


}
