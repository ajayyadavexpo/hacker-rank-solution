// Complete the kangaroo function below.
function kangaroo($x1, $v1, $x2, $v2) {
$jump = array($x1, $v1, $x2, $v2);

$step = 0;
for($i=0;$i<100000;$i++){
    $x1 = $x1+$v1;
    $x2 = $x2 + $v2;
    if($x1 == $x2){
        $step = 1;
        return "YES";
        break;
    }
}
if($step == 0){
    return "NO";
}


}