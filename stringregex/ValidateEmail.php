<?php
    function checkEmail() {
        if($_SERVER["REQUEST_METHOD"] === 'POST') {
            $email = $_POST["email"] ;
            $parten = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/' ;
            if(!empty($email)) {
                if(preg_match($parten,$email)) {
                    echo 'Email hợp lệ' ;
                }else {
                    echo 'email không hợp lệ !!!' ;
                }
            }else {
                return "" ;
            }
        }
    }
     
   checkEmail () ;
    



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
       Email : <input type="text" name="email" id="">
            <br> <br>
        <button type="submit">Submit</button>




    

    </form>
</body>
</html>