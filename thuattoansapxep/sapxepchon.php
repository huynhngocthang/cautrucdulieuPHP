<?php
function selection_sort($data) {
    for($i=0;$i<count($data)-1;$i++) {
        $min = $i ;
        for($j=$i+1;$j<count($data);$j++) {
            if($data[$j] < $data[$min]) {
                $min = $j ;
            }
        }
        $data = swap_postions($data, $i ,$min) ;
    }
    return $data ;
}
function swap_postions($data1,$left,$right) {
    $back_old_data_right_value = $data1[$right] ;
    $data1[$right] = $data1[$left] ;
    $data1[$left] = $back_old_data_right_value ;
    return $data1 ;
}
$my_array = array(1, 9, 4.5, 6.6, 5.7, -4.5) ;
echo "mảng ban đầu : <br>" ;
echo implode(',',$my_array) ;
echo "<br> mảng đã qua sắp xếp : <br>" ;
echo implode(',',selection_sort($my_array)) ;



?>