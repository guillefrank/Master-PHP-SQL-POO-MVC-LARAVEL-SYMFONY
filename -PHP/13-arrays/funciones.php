<?php 
// Ordenar elementos dentro de un array
$cantantes=['2pac','Pitbull','Bad Bunny','Alejandro Sanz'];
// arsort($cantantes);ordena de Z...A
 asort($cantantes);//ordena de A...Z
var_dump($cantantes);
// sort($cantantes); sirve para ordenar los numeros tambien

// $numeros=[92,4,15,8,13,24];
// sort($numeros);

//Añadir elementos en un array

$cantantes[]="L-gante";  //metodo 1
array_push($cantantes,"Sech");//metodo 2

//Elimanacion de elementos en un array
//array_pop($cantantes); //elimina el ultimo elemento del array
//unset($cantantes[0]);//elimina el elemento en el indice indicado

//Elemento Aleatorio de array
$indice= array_rand($cantantes);
// echo ($cantantes[$indice]);

//Dar vuelta un array
$reverse=array_reverse($cantantes);
// var_dump($reverse);

//Buscar dentro de un array
$resultado=array_search('Pitbull',$cantantes);
// var_dump($resultado);

//Contar numero de elementos
echo count($cantantes);//metodo 1
echo sizeof($cantantes);//metodo 2
?>