/*Using a loop, create a function that calculate:
- count how many numbers are even.
- count how many are greater than 10
- calculate the sum of the numbers greater than 10
-print the largest number*/

<?php

$numbers =[12,5,18,7,20,3,15];
$countEven=0;
$countGreater=0;
$sumGreater=0;
$largest=$numbers[0];

foreach ($numbers as $number) {
    if ($number % 2 == 0){
        $countEven++;
    }
    if ($number >10){
        $countGreater++;
        $sumGreater += $number;
    }
    if ($number > $largest){
        $largest=$number;
    }
}
echo "Even numbers: ". $countEven. "<br>";
echo "Greater than 10: ". $countGreater."<br>";
echo "Sum of numbers greater than 10: " . $countGreater."<br>";
echo "Largest number: " . $largest."<br>";




?>