<?php
    function checkClass() {
        if($_SERVER["REQUEST_METHOD"] === 'POST') {
            $class = $_POST['class'] ;
            $paten = '/^[CAP][0-9]{4}[GHIKLM]$/' ;
            if(!empty($class)) {
                if(preg_match($paten,$class)) {
                    echo 'Class hợp lệ' ;
                }else {
                    echo "Class không hợp lệ" ;
                }
            }else {
                return "" ;
            }
        }
    }
    checkClass() ;


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
       Class : <input type="text" name="class" id="">
            <br> <br>
        <button type="submit">Submit</button>




    

    </form>
</body>
</html>