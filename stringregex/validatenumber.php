<?php

    function checkNumberPhone() {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $number = $_POST["number"] ;
            $paten = "/^\([0-9]{2}\)\-\(0[0-9]{9}\)$/" ;
            if(!empty($number)) {
                if(preg_match($paten,$number)) {
                    echo 'numphone hợp lệ' ;
                }else {
                    echo "numphone không hợp lệ" ;
                }
            } else {
                return "" ;
            }
        }
    }
    checkNumberPhone() ;
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
       Number : <input type="text" name="number" id="">
            <br> <br>
        <button type="submit">Submit</button>
</body>
</html>