<?php
/*
*/
//DEbuguear
$nombre="Guillermo Vazquez";
var_dump($nombre);
//Fechas
echo date('d-M-Y');
echo "<br/>";
echo time();
//Matematicas
echo "<br/>";
echo "Raiz Cuadrada de 10: ".sqrt(10);
echo "<br/>";
echo "Numero aleatorio entre 10 y 40:  ".rand(10,40);
echo "<br/>";
echo"Numero Pi: ".pi();
echo "<br/>";
echo"Redondear ".round(7.891234,1);

//Mas funciones generales
echo "<br/>";
echo gettype($nombre);

echo "<br/>";
if (is_string($nombre) ) {
    echo "La variable nombre es un string";    
}
echo "<br/>";
if (!is_float($nombre) ) {
    echo "La variable nombre no es un numero con decimales";    
}
echo "<br/>";
//Comprobar si existe una variable
if (isset($nombre)) {
    echo"La variable existe";
}else {
    echo"La variable no existe";
}
echo "<br/>";
//Limpiar espacios en blancos
$frase="       mi contenido       ";
var_dump(trim($frase));
//Eliminar varibles e indices de arrays
$year= 2022;
//unset($year);
var_dump($year);

//Comprobar variable vacia
$texto="     ";
if (empty(trim($texto))) {
    echo"La variable texto esta vacia";
}else {
    echo"La variable no esta vacia";
}
echo "<br/>";
//Contar una cadena de caracteres(string)
$cadena="12345";
echo strlen($cadena);
echo "<br/>";
//Encontrar caracter
$frase="La vida es bella";
echo strpos($frase,'v');
echo "<br/>";
//Reemplazar palabras de un string
$frase= str_replace("vida","moto",$frase);
echo $frase


?>