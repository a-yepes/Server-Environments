/*Given numbers = [4,7,2,4,9,7,4,2,8,7]; display the numbers that appear more than once.
Expected 4 7 2 */

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
    //buscamos el mas grande para saber hasta que numero contamos
    
    $maxim = max($numbers);
    $maxim++;

    //un array vacio para contar cuantas veces aparece cada numero
    $repeated = [];

    //recorremos todos los numeros y aumentamos su contador
    for ($i = 0; $i < maxim; $i++) {
        $repeated[] = 0;
    }

    for ($i = 0; $i < count($numbers); $i++) {
        $repeated[$numbers[$i]]++;

    }

    //miramos los contadores y comprobamos cual es mayor de 1
    for ($i = 0; $i < count($repeated); $i++) {
        if ($repeated[$i] > 1) {
            echo $i;
        }
    }

    // OPCION 2
    $numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
    $repeated = array_count_values($numbers);
    print_r($repeated);

    foreach ($repeated as $key => $value) {
        if ($value < 1) {
            echo $key;
        }
    }

    //eliminar elementos duplicados excepto la primera ocurrencia
    $numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];

    $repeated = array_count_values($numbers);
    print_r($repeated);

    $result = [];

    foreach ($numbers as $number) {
        if ($repeated[$number] > 0) {
            $result[] = $number;
            $repeated[$number] = 0;
        }
    }

    print_r($result);
    //opcion 2 con funciones
    $numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];

    $unique = array_unique($numbers);

    print_r($unique);

    /*mostrar los no duplicados solo. array_unique,array_count_values,count,
    in_array,array_search*/

    $numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];

    //cuantas veces aparece el numero
    $count = array_count_values($numbers); //devuelve otro array clave-valor

    $result = [];

    //recorro el array clave-valor (number y quantity)
    foreach ($count as $number => $quantity) {
        if ($quantity === 1) {//si el numero aparece exactamente una vez, 
            $result[] = $number; //lo guardamos
        }
    }

    print_r($result);











    ?>
</body>

</html>