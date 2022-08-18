<?php
/*Ejercicio 1. Hacer un programa en Php que tenga un array con 8 numeros enteros 
y que haga lo sgte.:  
Recorrer  y mostrarlo
Ordenar y mostrarlo
Mostrar su longitud
Buscar algun elemento   */

/* Funciones que aplico para el ejercicio */ 
function mostrarArray($ejercicio1){
    $resultado='';
    foreach ($ejercicio1 as $equipo) {
        //$resultado= $resultado.$numero."<br/>";
        $resultado.= ($equipo)."<br/>";
    };
    return $resultado;
}

$ejercicio1=['Independiente ','Racing ','Lanus ','River ','Boca ','Banfield '];
// var_dump($ejercicio1);
echo "<h1>Recorrer y mostrar el arreglo</h1>";
echo mostrarArray($ejercicio1);
echo "<br/>";
echo "<h1>Ordenar y mostrar el arreglo</h1>";
asort($ejercicio1);
echo mostrarArray($ejercicio1);
echo "<br/>";
echo "<h1>Contar cantidad de elementos del arreglo</h1>";
echo (count($ejercicio1));
echo "<br/>";
echo "<h1>Buscar un elemento dentro del arreglo</h1>";
//Buscar al mas grande
$grande='Boca ';
$resultado=array_search('Boca ',$ejercicio1);
if (!empty($resultado)) {
   echo "<h2>El resultado de la busqueda es: $ejercicio1[$resultado] </h2>";
}else{
    echo "<h2>No se encontro la busqueda</h2>";
}