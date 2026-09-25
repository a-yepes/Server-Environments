<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Define a variable with a number (for example 5) and using for loops create a page in which there is a table with as many rows as indicated in the variable and in each row there are as many * as the row number. (IN A TABLE) 


$row = 5; // Defino el número de filas que quiero



// Primero creo las filas
for ($x = 1; $x <= $row; $x++) {

    echo "<br>";

    // Ahora creo los asteriscos
    for ($y = 1; $y <= $x; $y++) {
        echo "<td>*</td>";
    }

    echo "</br>";
}


?>
</body>
</html>


