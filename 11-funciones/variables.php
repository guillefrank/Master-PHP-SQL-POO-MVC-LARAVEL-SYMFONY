<?php
/*
Variables locales: son las que se definen dentro de una funcion y no pueden ser usadas
fuera de la funcion, solo estan disponibles dentro a no ser que hagamos un return.
Variables globales: las que se declaran fuera de una funcion y 
y estan disponibles dentro y fuera de las funciones
*/
$frase="Ni los genios son tan genios, ni los mediocres son tan mediocres";

echo $frase;

function holaMundo(){
   global $frase;
    echo"<h1>$frase</h1>";
    $year=2022;
    echo"<h1>$year</h1>";
    return $year;
}
holaMundo();

//Funciones Variables

function buenosDias(){
    return "Hola! Buenos Dias :)";
}
function buenasTardes(){
    return "Hey! Que tal ha ido la comida?";
}
function buenasNoches(){
    return "¿Te vas a dorir ya? Buenas noches!";
}
$horario="Noches";
$miFuncion="Buenas ".$horario;

echo $miFuncion;
?>