<?php
function checkPhone($arr,$num) {
    for($i = 0; $i<count($arr); $i++) {
        if($arr[$i] == $num) {
            return true ;
        }
    } return false ;
}

$str = "078969495,090594595" ;
$viettelNum = [86,96,97,98,32,33,34,35,36,37,38,39] ;
$vinaNum = [88,91,94,83,84,85,81,82] ;
$mobiNum = [70,76,77,78,79,89,90,93] ;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrphone = explode(',',$_POST["phone"]) ;
    $arrtelephone = [
        "viettel" => [] ,
        "vina" => [],
        "mobi" => [],
        "exception" =>[]
    ] ;
    foreach($arrphone as $value) {
        $firstPhone = substr($value,1,2) ;
        if(filter_var($firstPhone,FILTER_VALIDATE_INT) && strlen($value) === 10)
        {
            if($value[0] == 0) {
                if(checkPhone($viettelNum,$firstPhone)) {
                    array_push($arrtelephone['viettel'], $value) ;
                }elseif(checkPhone($vinaNum,$firstPhone)){
                    array_push($arrtelephone['vina'] , $value);
                }elseif(checkPhone($mobiNum,$firstPhone)) {
                    array_push($arrtelephone['mobi'], $value) ;
                } else {
                    array_push($arrtelephone['exception'],$value) ;
                }
            } else {
                array_push($arrtelephone['exception'],$value) ;
            }
        }
    }
} 
// var_dump($arrphone) ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th,td {
            border:1px solid black;
            vertical-align: top;
        }   
    </style>
</head>
<body>
    <fieldset>
        <form action="<?=$_SERVER["PHP_SELF"] ?>" method="Post">
            <label for="">Nhập các số điện thoại</label>
            <br> <br>
            <textarea name="phone" id="" cols="30" rows="10" placeholder="ví dụ :0702420 , 0367838605"></textarea>
            <br>
            <input type="submit" value="search" name="search">
            <br>
            <table>
            <tr>
            <th>Viettel</th>
            <th>Vina</th>
            <th>Mobi</th>
            <th>exception</th>
            </tr>
            <?php if(!empty($arrtelephone)) : ?>
                <tr>
                    <?php foreach($arrtelephone as $value) : ?>
                        <td>
                            <?php foreach($value as $val) :  ?>
                                <?=$val ?> 
                                <br>
                            <?php endforeach?>
                        </td>
                    <?php endforeach?>
                <?php endif; ?>
            </tr>

        </table>


    </form>
    </fieldset>
</body>
</html>