<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php
echo "<h1>Result:</h1>";
    $number1 = &$_POST['number1'];
    $number2 = &$_POST['number2'];
    $operator = &$_POST["operator"];
    $result = 0;
    
    if($operator == "add"){
        $result = $number1 + $number2;
        echo "The result of $number1 + $number2 is $result";
    }
    else if($operator == "sub"){
        $result = $number1 - $number2;
        echo "The result of $number1 - $number2 is $result";
    }
    else if($operator == "mul"){
        $result = $number1 * $number2;
        echo "The result of $number1 * $number2 is $result";
    }
    else if($operator == "div"){
        $result = $number1 / $number2;
        echo "The result of $number1 / $number2 is $result";
    }
    else if($operator == "mod"){
        $result = $number1 % $number2;
        echo "The result of $number1 % $number2 is $result";
    }
    else if($operator == "exp"){
        $result = $number1 ** $number2;
        echo "The result of $number1 ** $number2 is $result";
    }
    else if($operator == "sqrt"){
        $result = sqrt($number1);
        echo "The square root of $number1 is $result";
    }
    else if($operator == "log"){
        $result = log($number1);
        echo "The logarithm of $number1 is $result";
    }
    else{
        echo "Invalid operator";
    }
    
?>
<br>`
<button><a href="index.php">Perform different calculations</a></button>
</body>
</html>