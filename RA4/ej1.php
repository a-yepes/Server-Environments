<?php

/*Create a PHP program that uses cookies and sessions.
Requirements:
1. Create a cookie called username with the value "Alex". The cookie must expire in
one hour.
2. Start a session and store the username "Alex" in a session variable called user.
3. Display a welcome message using the cookie.
4. Display a message using the session.
5. If the cookie does not exist, display "Guest".
6. If the session variable does not exist, display "No active session".

*/


session_start();//always. To sabe info of the user 

//create the cookie that expires in one hour
setcookie("username","Alex", time()+3600,"/");

//create session variable
$_SESSION["user"] ="Alex";

//display the welcome message and use guest as default
echo "Welcome, " . ($_COOKIE["username"] ?? "Guest");
echo "<br>";

//display the session value and if it doesnt exist display no active
echo "Session user: ". ($_SESSION["user"]?? "No active session");

//Primero muestra guest porque hasta que no se recarga la pagina una vez no se guarda la cookie (Alex)



?>