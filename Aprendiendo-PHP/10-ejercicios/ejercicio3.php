<?php
/*Ejercicio 3, escribir un programa que imprima
por pantalla los cuadrados (un numero multiplicado por si mismo)
de los 40 primeros numeros naturales*/
/*
$contador=0;
while ($contador <= 40) {
   $cuadrado= $contador*$contador;
   
    echo"<h3>El cuadrado de $contador es $cuadrado</h3>";
    $contador++;
}*/

for ($i=0; $i <=40 ; $i++) { 
    $cuadrado=$i*$i;
    echo"<h3>El cuadrado de $i es $cuadrado</h3>";

}

?>