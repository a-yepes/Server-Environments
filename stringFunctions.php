/*1. Remove duplicate words
Write a program that receives a sentence and:

Converts all words to lowecase

Removes duplicate words

Keeps only the first occurrence of each word.

Prints the resulting sentence.

Example: input: php is great and php is powerful
output: php is great and powerful
Useful functions: strtolower(),explode(),array_unique(),implode()*/


<?php

$sentence = readline("Write your sentence: ");

//convert to lower case
$sentence = tolowercase($sentence);

//split sentence into words
$words = explode(" ", $sentence);

//remove duplicate words keeping the first occurrence
$words = array_unique($words);

//join the words back into a sentence
$result = implode(" ", $words);

echo $result;

?>

/* 2. Given an array:
Ask the user for a search term and find all the words containing that term*/

<?php
$words = [
    "programming",
    "php",
    "javascript",
    "python",
    "proxy",
    "database",
    "developer",
    "protocol",
    "production"
];
$term = readline("Write your search term: ");
foreach ($words as $word) {//para cada elemento del array words, llamalo word
    if (str_contains($word, $term)) { //$word es la palabra que revisamos y $term lo que el usuario quiere buscar
        //array_push($result,$word)
        echo $word;
    }

}
//print_r($result)
?>

/*3. Write a program that analyzes a password. 
Check whether it contains:
At least 8 characters
Uppercase letters
Lowercase letters
Numbers
Special characters*/ 

<?php
$password = "Passw0rd-";

if (strlen($password) >= 8 
    && preg_match("/[A-Z]/", $password) 
    && preg_match("/[a-z]/", $password) 
    && preg_match("/[0-9]/", $password) 
    && preg_match("/[^A-Za-z0-9]/", $password)) {
    
    echo "Valid password";
} else {
    echo "Invalid password";
}
?>

/*4 Find pairs that add up to a target : count()*/

<?
$numbers=[2,7,4,5,3,8,1];
$target=10;

for($i=0;$i<count($numbers);i++){ //select first number
    for $j=$i+1;$j <count($numbers);j++{ //check every other number
        if($numbers[$i]+$numbers[$j]==target){
            echo $numbers[i]." + ". $numbers[$j]. " = ".$target;
            $count++;

        }
    }


}
echo "Total = ". $count;


?>