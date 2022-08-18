<?php
/*
Ejercicio 4, recoger dos numeros por la url(GET)
y hacer todas las operaciones basicas de una calculadora.
*/
if(isset( $_GET['numero1'])&& isset($_GET['numero2'] )){
    $numero1= $_GET['numero1'];
    $numero2= $_GET['numero2'];
    echo"<h1>Calculadora</h1>";
    echo"Suma: ".($numero1+$numero2)."<br/>";
    echo"Resta: ".($numero1-$numero2)."<br/>";
    echo"Multiplicacion: ".($numero1*$numero2)."<br/>";
    echo"Division: ".($numero1/$numero2)."<br/>";
}else{
    echo"<h1>Introduce los dos numeros por la url</h1>";
}

?>