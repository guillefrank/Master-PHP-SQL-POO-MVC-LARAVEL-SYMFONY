<?php
/* Ejercicio 1, crear 2 variables(pais,continente) y mostrar su valor por pantalla
y luego poner en un comentario que tipo de dato tienen.
*/

$pais='argentina';
$continente='america';

echo"<h1>Mi pais es $pais y esta dentro de $continente</h1>";

echo(gettype($pais));
echo'<hr/>';
echo (gettype($continente));
?>