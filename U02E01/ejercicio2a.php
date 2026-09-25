/*Create an associative array with the days of the week as keys and a meal as the value.
The result must display a table with only the days from Monday to Friday.
Each row must contain two cells: one with the day of the week and one with the meal.

IMPORTANT: The information displayed must be extracted from the array. Do not write the days or meals directly in the HTML.
Use a loop and a condition to select which days are displayed.*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$meals= array("Monday"=>"pasta", "Tuesday"=>"rice","Wednesday"=>"vegetables","Thursday"=>"chicken","Friday"=>"fish",
"Saturday"=>"pizza","Sunday"=>"salad");


foreach($meals as $day =>$food){
    if($day != Saturday && $day != Sunday){
        echo "<tr>";
        echo "<td>$day</td>";
        echo "<td>$food</td>";
        echo "</tr>";
    }

}



?>
</body>
</html>

