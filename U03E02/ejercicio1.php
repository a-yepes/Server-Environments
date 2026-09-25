/*To create a variable that indicates the type of geometric figure: 
square, rectangle, triangle and depending on the type of figure that you have put in it, 
it tells you how the value of the perimeter would be calculated.*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$text = readline('Write your figure: ');

switch ($text) {

    case 'triangle':
        echo "To find the perimeter of a triangle, you have to add up its sides.";
        break;

    case 'square':
        echo "To find the perimeter of a square, you have to add up its sides.";
        break;

    case 'rectangle':
        echo "The perimeter of a rectangle is calculated by adding up the lengths of all its sides, using the formula P = 2 × (base + height).";
        break;

    default:
        echo "Unknown figure.";
        break;
}

?>

</body>
</html>
