
<?php

/* Defining a variable with a number (for example 5)
   and using while loops draws a ladder of numbers
   of the type pyramid. */

$number = 5;
$x = 1;

while ($x <= $number) {

    // Ahora creo los números
    for ($y = 1; $y <= $x; $y++) {
        echo $x;
    }

    echo "<br>";

    $x++;
}

?>

