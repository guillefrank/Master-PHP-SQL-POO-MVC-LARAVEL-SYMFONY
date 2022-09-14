<?php
/*
Ejercicio 4.
Crear un script en PHP que tenga
4 variables, 1 de tipo array,1 de tipo string,1 de tipo int, 1 booleana 
y que imprima un mensaje segun el tipo de variable que sea.
*/

$matriz= array("hola mundo", 88);
$titulo="Master en PHP";
$numero= 77;
$verdadero=true;

if (is_array($matriz)) {
    echo "<h2>El arreglo es un arreglo</h2>"; 
}
echo"</br>";
if (is_string($titulo)) {
    echo $titulo; 
}
echo"</br>";
if (is_int($numero)) {
    echo $numero ; 
}
echo"</br>";
if (is_bool($verdadero)) {
    echo "<h2>El booleano es verdadero</h2>";
}


?>