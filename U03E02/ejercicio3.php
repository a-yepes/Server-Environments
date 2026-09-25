/*You have a number that can between 1 and 100. 
The script using a “for” structure, should calculate the average of the first “n” numbers. 
That is to say: if n=4, it will calculate the average of 1+2+3+4. 
If n=7 it will calculate the average of 1+2+3+4+5+6+7 and display it on the screen.*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //pido datos al usuario
    $n = input("Enter a number between 1 and 100: ");

    //creo una variable para guardar la suma que empiece en cero porque todavia no hay numeros
    $total = 0;

    for ($i=1; $i <= $n;$i++){ //si i vale 1, suma 1 al total; si i vale 2, el total son 3 (1+2)
    $total += i;
    }

    $average = $total / $n;

    echo("The average is:" + average);


    //MODIFICACION: solo sumar los pares
    $n = input("Enter a number between 1 and 100: "); 

    $total = 0; 
    
    for ($i = 1; $i <= $n; $i++) { 
        if ($i % 2 == 0) { 
            $total += $i; 
            } 
        } 
    echo("The sum of the even numbers is: " + $total);

    //MODIFICACION: saber si un numero es primo
    $n = input("Introduce un número: "); 

    $primo = true; 

    for ($i = 2; $i < $n; $i++) { 
        if ($n % $i == 0) { 
            $primo = false; 
            } 
        } 
        
    if ($primo) { 
        echo("El número es primo"); 
        } 
        else { 
            echo("El número no es primo"); 
        }


    ?>
</body>
</html>