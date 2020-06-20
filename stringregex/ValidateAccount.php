<?php
    function checkAcount() {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $acount = $_POST["acount"] ;
            $paten = '/^[_a-z0-9]{6,}$/' ;
            if(!empty($acount)) {
                if(preg_match($paten,$acount)) {
                    echo 'Acount hợp lệ' ;
                }else {
                    echo "Acount không hợp lệ" ;
                }
            } else {
                return "" ;
            }
        }
    }
    checkAcount() ;


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
      Acount :  <input type="text" name="acount" id="">
            <br> <br>
                 <button type="submit">Submit</button>
    </form>
</body>
</html>