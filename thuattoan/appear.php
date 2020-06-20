<?php
$numbers = array(1,2,3,6,5,8,7,4,6,8,6) ;

function findNumber($numbers,$num) {
    $count = 0 ;
    foreach($numbers as $number) {
        if($number === $num ){
            $count++ ;
        }
    }  return $count ;
}

$finnum = findNumber($numbers,2) ;
echo "số 6 xuất hiện :"  . $finnum . "lần";

?>