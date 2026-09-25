<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*Loop through an array of meals and days of the week (an associative array.)
The result have to draw a table with as many rows as days of the week and in each row two cells, 
one with the day of the week and one with the meal for these day.*/

#primero creo el array con sus pares clave-valor
$menu = array("Monday"=> "pasta", "Tuesday"=>"rice","Wednesday"=>"vegetables","Thursday"=>"soup",
                "Friday"=>"pizza","Saturday"=>"lasagna","Sunday"=>"beef");

#ahora doy formato de tabla
echo " <table border='1'>";

#recorro el array y declaro las variables para los pares clave-valor

foreach($menu as $day => $meals){
    echo "<tr>"; #creo una fila
    echo "<td>$day</td>"; #creo la primera celda
    echo "<td>$meals</td>"; #creo la segunda celda
    echo "</tr>";

}

echo "</table>";


?>
</body>
</html>
