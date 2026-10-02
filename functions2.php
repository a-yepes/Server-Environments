<?php

/*Create a new username that : removes spaces at the beginning and end, 
converts everything to lowercase
replaces _with - 
expected result: john-doe-2026
Fucntions to use: trim(),strtolower(),str_replace()*/

$username = "   John_Doe_2023   ";

$username= trim($username);
$username= strtolower($username);
$username=str_replace("_","-",$username);
echo $username;


?>


/*Check wether the password: 
has at least 8 characters, 
contains at least one uppercase letter,
contains at least one lowercase letter,
contains at least one number,
contains the character!.*/

<?php
$password = "PhpMaster2026!";
if(strlen($password) >=8) && 



?>