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
//COMPLETAR CON RESUELTOS DE CLASE

<?php 
$numbers=[2,7,4,5,3,8,1,2];
//$numbers=array_unique($numbers);
$target=10;

sort($numbers);

for($i=0;$i<count($numbers);$i++){ //select first number
    for ($j=$i+1;$j <count($numbers);$j++){ //check every other number
        if($numbers[$i]+$numbers[$j]==$target){
            echo $numbers[$i]." + ". $numbers[$j]. " = ".$target. "<br>";
              
        }
    }
}

//target/2 porque si target es 10, lo que sea mas de 5 se va a pasar.
/*El problema es que si es par no puedes eliminar los duplicados. Solucion: ordenar el array
e iterar solo hasta la mitad de $target*/


?>

//Solucion1
<?php
$numbers = [2, 7, 4, 5, 3, 8, 1, 5]; // Incluimos un duplicado del 5 para probar
$target = 10;

// 1. Ordenamos el array de menor a mayor
sort($numbers);

$izquierda = 0;
$derecha = count($numbers) - 1;

while ($izquierda < $derecha) {
    $suma = $numbers[$izquierda] + $numbers[$derecha];

    if ($suma == $target) {
        echo $numbers[$izquierda] . " + " . $numbers[$derecha] . " = " . $target . "<br>";
        
        // Avanzamos ambos punteros para buscar otras combinaciones
        $izquierda++;
        $derecha--;
    } elseif ($suma < $target) {
        // Si falta para llegar al target, subimos el número pequeño
        $izquierda++;
    } else {
        // Si nos pasamos, bajamos el número grande
        $derecha--;
    }
}
?>

//create a function countCharacters() that receives a string and return the number of characters. Dont use strlen.
<?php

function countCharacters($string) {
    $count = 0;

    for ($i = 0; $string[$i] !== ""; $i++) {
        $count++;
    }
    //for ($i=0; isset($string[$i];i++)) hacer esto mejor que el for

    return $count;
}

echo countCharacters("Hola"); 


?>

/*crea una funcion palabraMasLarga($texto) 
debe recibir una frase y devolver la palabra que tenga mas caracteres*/
<?php
function palabraMasLarga($text){
    $words=explode(" ", $text); // separa la frase en palabras y hace array
    $count = "";

    foreach ($words as $word){
        if(strlen ($word)>strlen($count)){
            $count=$word;

        }
    }
    return $count;
}
echo palabraMasLarga("Hola que tal");
?>

//Otra opcion del anterior
<?php
/*function palabraMasLarga($text){
    $words=explode(" ", $text);
    sort($words); // separa la frase en palabras y hace array
    return $words[count ($words)-1]; //ordenas el array y devuelves la ultima palabra
    
}
echo palabraMasLarga("");
?>
*/ 

// ahora la segunda más palabraMasLarga. ASI NO FUNCIONA POR EL SORT
<?php
function segundaMasLarga($text){
    $words=explode(" ", $text);
    sort($words); // separa la frase en palabras y hace array
    return $words[count ($words)-2]; //ordenas el array y devuelves la ultima palabra
    
}
echo segundaMasLarga("");
?>

function segundaMasLarga($text){
    $palabras = explode("",$text);
    $masLarga ="";
    $segunda="";
    foreach ($palabras as $palabra){
        if(srlen($palabra) > strlen($masLarga)){
            $segunda = $masLarga;
            $masLarga = $palabra;
        }
        elseif (strlen($palabra)> str($segunda)){
            $segunda=$palabra;

        }
    }
    return $segunda;
}
echo segundaMasLarga("La vida es bella");

