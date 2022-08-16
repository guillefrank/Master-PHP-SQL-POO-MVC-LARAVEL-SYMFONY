<?php
// Una variable es un contenedor de informacion, puedo guardar dato dentro de ella
$mi_primera_variable= "Hola Mundo desde una variable";
echo '<h1>'.$mi_primera_variable.'</h1>';
$numero=44;
$verdadero=true;
$decimal=24.6;
$texto2='Soy un texto $numero ';
$texto="Soy un texto $numero ";
//manera correcta
$texto3='Soy un texto '.$numero;
$nula=null;

echo($texto);
echo($texto2);
echo($texto3);
// echo gettype($nula);

$mi_nombre[]='Guillermo Vazquez';
$mi_nombre[]='Guillermo Vazquez';
// var_dump($mi_nombre);
?>