<?php
    function isFirstLetterUpperCase() {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $text = $_POST["text"] ;
            $regexp = '/^[A-Z]/' ;
            if(!empty($text)) {
                if(preg_match($regexp,$text)) {
                    echo 'chữ cái đầu là viết hoa' ;
                }else {
                    echo 'chữ cái đầu không phải viết hoa' ;
                }
            }else {
                return "" ;
            }
        }
    }
    isFirstLetterUpperCase() ;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="POST">
        <input type="text" name="text" placeholder="nhập chuỗi bất kì">
            <br> <br>
        <button type="submit">Submit</button>
</form>
</body>
</html>