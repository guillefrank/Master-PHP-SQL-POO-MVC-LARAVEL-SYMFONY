<?php
/*
Para mostrar el valor de las cookies, tengo
que usar $_COOKIE, una variable superglobal,,
es un array asociativo.
*/
if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else {
    echo"No existe la cookie";
}

if (isset($_COOKIE['unyear'])) {
    echo"<h1>".$_COOKIE['unyear'];
}else {
    echo"No existe la cookie";
}

?>
<a href="crear_cookie.php">Crear galletas</a>
<a href="borrar_cookies">Borrar galletas</a>