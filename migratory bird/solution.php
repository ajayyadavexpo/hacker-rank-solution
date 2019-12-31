<?php

// Complete the migratoryBirds function below.
function migratoryBirds($ar) {
$type1 = 0;
$type2 = 0;
$type3 = 0;
$type4 = 0;
$type5 = 0;
for($i=0;$i<count($ar);$i++){
    if($ar[$i] == 1){
        $type1++;
    }
    elseif($ar[$i] == 2){
        $type2++;
    }
    elseif($ar[$i] == 3){
        $type3++;
    }
    elseif($ar[$i] == 4){
        $type4++;
    }
    elseif($ar[$i] == 5){
        $type5++;
    }
}
$arsort = array($type1,$type2,$type3,$type4,$type5);
rsort($arsort);
if($arsort[0] > $arsort[1]){
    if($arsort[0] == $type1){
        return 1;
    }
    if($arsort[0] == $type2){
        return 2;
    }
    if($arsort[0] == $type3){
        return 3;
    }
    if($arsort[0] == $type4){
        return 4;
    }
    if($arsort[0] == $type5){
        return 5;
    }
    
}
else{
    if($arsort[0] == $type1){
        return 1;
    }
    if($arsort[0] == $type2){
        return 2;
    }
    if($arsort[0] == $type3){
        return 3;
    }
    if($arsort[0] == $type4){
        return 4;
    }
    if($arsort[0] == $type5){
        return 5;
    }
}
}
