<?php
// Your code here!

function gradingStudents($grades) {
    /*
     * Write your code here.
     */
    $mul = array();
    $i= 0;
    $arr = array();
    for($j=1;$j<=100;$j++){
        if($j % 5 == 0){
            $mul[$i] = $j;
            $i++;
        }
    }
    for($j=0;$j<count($grades);$j++){
        $a = $grades[$j];
        if($a>=38){
            for($i=0;$i<count($mul);$i++){
                if($mul[$i] >=$a){
                    $b =  $mul[$i];
                    $c = $b-$a;
                    if($c < 3){
                        $arr[$j]=$b;
                        break;
                    }
                    elseif($c == 3){
                        $arr[$j]=$a;
                        break;
                    }
                    elseif($c > 3){
                        $arr[$j]=$a;
                        break;
                    }else{
                        break;
                    }
                }
            }
        }else{
            $arr[$j]= $a;
        }
    }
    return $arr;
}





$student = [20,55,67,43,73];
print_r(gradingStudents($student));


