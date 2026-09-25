/*Develop a php script for a Calculator with basic operations. 
Create a php program that defines 3 variables: operand1, operand2, operationtype and 
based on them perform the operation described in operationtype (+,-,*,/).*/-

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $operand1 = readline("Write the first number: ");
    $operand2 = readline("Write the second number: ");

    $operationtype = readline("What you want to do with them? +, -, *, /");
    switch( $operationtype ){
        case "+":
            echo($operand1 + $operand2);
            break;

        case "-":
            echo($operand1 - $operand2);
            break;
        
        case "*":
            echo($operand2 * $operand1);
            break;

        case "/":
            echo($operand1 / $operand2);
            break;
        default:
        echo("Invalid operation.");
            

    }




    ?>
</body>
</html>