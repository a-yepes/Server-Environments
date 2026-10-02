<?php

/*
//Solution 1
//Identify duplicate elements
$numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
$repeated = [];

foreach ($numbers as $number) {
    $count = 0;

    foreach ($numbers as $value) {
        if ($number == $value) {
            $count++;
        }
    }

    if ($count > 1) {
        $alreadyExists = false;

        foreach ($repeated as $value) {
            if ($value == $number) {
                $alreadyExists = true;
            }
        }

        if (!$alreadyExists) {
            $repeated[] = $number;
        }
    }
}

foreach ($repeated as $number) {
    echo $number . " ";
}
    */

/*
//Solution 2
//Identify duplicate elements
$numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
$maxim=max($numbers);
$maxim++ ;
$repeted=[];
for ($i= 0; $i<$maxim; $i++) {
    $repeted[]=0;
}
for ($i= 0; $i<count($numbers); $i++){
    $repeted[$numbers[$i]]++;
}
for ($i= 0; $i<count($repeted); $i++){
    if ($repeted[$i]>1){
        echo $i;
    }
}*/
/*
//Solution 3
//Identify duplicate elements
$numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
$maxim=max($numbers);
$maxim++ ;
for ($i= 0; $i<$maxim; $i++) {
    $repeted[]=0;
}
for ($i= 0; $i<count($numbers); $i++){
	if ($repeted[$numbers[$i]]){
		for ($j= $i++; $i<count($repeted); $i++){
			if ($numbers[$i]==$numbers[$j]){
				$repeted[$numbers[$i]]=1;
				echo $numbers[$i];
			}
		}
	}
}
    */
/*
//solution 4 -- with array functions
//Identify duplicate elements
$numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
$repeted= array_count_values($numbers);
//ksort($repeted);
//print_r($repeted);
foreach ($repeted as $key => $value) {
    if ($value> 1){
        echo $key;
    }

}
    */
/*
//Identify duplicate elements, and remove duplicate elements except first occurrence. - with array functiong
$numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
print_r (array_unique($numbers));
*/
/*
//Identify duplicate elements, and remove duplicate elements except first occurrence. - without array functiong
$numbers = [4, 7, 2, 4, 9, 7, 4, 2, 8, 7];
$repeted= array_count_values($numbers);
//print_r($repeted);
for ($i= 0; $i<count($numbers); $i++){
    if ($repeted[$numbers[$i]]> 1){
        $repeted[$numbers[$i]]=-1;
        print_r($repeted);
        echo "<br>";
    }elseif ($repeted[$numbers[$i]]== -1){
        //$numbers[$i]=-1;
        unset($numbers[$i]);
    }
}
print_r($numbers);
*/
//Show only the elements that are not duplicate
/*
using functions:
array_unique()
array_count_values()
count()
in_array()
array_search()
*/


$numeros = [4, 7, 4, 2, 9, 7, 5, 2, 8];

$frecuencias = array_count_values($numeros);

foreach ($frecuencias as $numero => $veces) {
    if ($veces == 1) {
        echo $numero . "<br>";
    }
}



?>