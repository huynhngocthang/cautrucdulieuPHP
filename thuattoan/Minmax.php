<?php
$arr = array() ;
for($i=0;$i<100;++$i) {
    array_push($arr,rand(0,101)) ;
}
foreach($arr as $value) {
    echo $value . "   " ;
}

function findMin($arr) {
    $min = $arr[0] ;
    for($i=1;$i<count($arr);$i++) {
        if($min>$arr[$i]){
            $min = $arr[$i] ;
        }
    }   return $min ;
}
function finMax($arr) {
    $max = $arr[0] ;
    for($i=1; $i<count($arr);$i++) {
        if($max < $arr[$i]) {
            $max = $arr[$i] ;
        }
    }   return $max ;
}
$minvalue = findMin($arr) ;
echo "<br/>" ;
echo "the minium value is :" . $minvalue ;
$maxvalue = finMax($arr) ;
echo "<br/>" ;
echo "the maxnium value is :" . $maxvalue ;



?>