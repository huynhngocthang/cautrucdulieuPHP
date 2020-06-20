<?php
class DivideByZeroException extends Exception {
    public function __toString()
    {
        return "Can't divide by zero" ;
    }
}
function divide() {
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $first = $_POST['first'] ;
        $second = (int) $_POST['second'] ;
        
        if($second === 0) {
            throw new DivideByZeroException() ;
        } else {
            return $first / $second ;
        }
    }
    
}
try {
    echo divide() ;
}
catch (DivideByZeroException $e) {
    echo 'ko nhập số không :' . $e ;
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="first" placeholder="nhập số đầu tiên">
        <br> <br>
        <select name="operator" id="">
            <option value="aver">cộng</option>
        </select>
        <br> <br>
        <input type="text" name="second" placeholder="nhập số thứ 2">
        <br> <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>