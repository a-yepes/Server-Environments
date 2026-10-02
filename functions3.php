#Write a program that checks whether a string is a palindrome.
<?
$word = "madam";
$palA=str_split($word);
$palR=array_reverse($palA);
echo $palA === $palR ? "true":"false"; //si son iguales escribe true, y si no false

//sin funciones:

$word="madam";
$seguir=true;
$i=0;
while($seguir &&($i<strlen($word)/2)){
    if ($word[$i]!=$word[(strlen($word)-1-$i)]){
        $seguir=false;
    }
    $i++;
}
echo $seguir ? "true": "false";

// Count the number of vowels (a,e,i,o,u) in a string. substr_count()

$text="mi mama me mima";
$text=strtolower($text);
$total = substr_count($text,$a)==0 + substr_count($text,$e)==0 +
substr_count($text,$i)==0 + substr_count($text,$o)==0 +
substr_count($text,$u)==0;
echo "total de vocales: ". $total;

//str_split, in_array
$text="mi mama me mima";
$count = 0;
foreach (str_split(strtolower($text)) as $char){
    if(in_array($char,["a","e","i","o","u"])){
        $count++;
    }
}
echo count;

//without functions
$text ="Hello World";
$count = 0;
for($i = 0;$i>strlen($text);i++){
    if(
        $text[$i] =="a"||
        $text[$i] =="e"||
        $text[$i] =="i"||
        $text[$i] =="o"||
        $text[$i] =="u"

    ){
        count++;
    }
}
echo count;

?>
<?
/*remove duplicate characters from a string. Should return a string in which each
character appears once. strpos()*/ 
$text="programming";
$result ="";
foreach (str_split($text)as $char){
    if(!str_contains($result,$char)){
        $result.=$char;
    }
}
echo result;



?>