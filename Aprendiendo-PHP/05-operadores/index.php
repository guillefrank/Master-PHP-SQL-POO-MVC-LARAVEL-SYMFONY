<?php
//operadores aritmeticos
$numero1= 55;
$numero2= 33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicacion; '.($numero1*$numero2).'<br/>';
echo 'Division: '.($numero1/$numero2).'<br/>';
echo 'Modulo: '.($numero1%$numero2).'<br/>';

//Operadores de incremente y decremento
$year=2019;
//Incremento
$year++;
echo '<h1>'.$year.'</h1>';

//Decremento
$year--;
echo '<h1>'.$year.'</h1>';

//Operadores de asignacion
$edad=30;
echo $edad.'<br/>';
//$edad=$edad+5
echo ($edad+=5).'<br/>';
//$edad=$edad*5
echo ($edad*=5);

?>