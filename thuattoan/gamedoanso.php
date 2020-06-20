<?php

$arr = [1,2,3,4,5,6,7,8,9,10] ;


function findNum($arr) {
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $chosse = $_POST["chosse"] ;
    }
    $slow = 0 ;
    $hight = count($arr) - 1 ;
    switch($chosse) {
        case "good":
            echo "Trò chơi kết thúc" ;
        break;
        case "small":
            while($slow <= $hight) {
                $mid = ($slow + $hight) / 2 ;
                if($arr[$mid] > 5) {
                  return  $hight = $mid - 1 ;}}
        break;
        case "big":
            while($slow <= $hight) {
                $mid = ($slow + $hight) / 2 ;
                if($arr[$mid] > 5) {
                  return  $slow = $mid + 1 ;}}
        break;
        default:
        break;
    }

}

findNum($arr) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    fieldset {
        /* width: 50%; */
        /* padding-left: 50px; */
        background-color: wheat;
        width: 500px;
        height: 300px;
    }
    form {
        margin: 100px;
    }
    
    </style>
</head>
<body>
<fieldset>
<form action="gamedoanso.php" method="post">
   <select name="chosse" id="">
       <option value="good">Chính xác, đó là con số tôi đã nghĩ:</option>
       <option value="small">Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra:</option>
       <option value="big">không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra:</option>
   </select>
    <br> <br>
    <input type="submit">
    </form>
</fieldset>
    
</body>
</html>