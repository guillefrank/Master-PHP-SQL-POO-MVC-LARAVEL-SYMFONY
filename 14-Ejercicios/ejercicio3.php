<?php
/*   
Ejercicio 3
Programa que compruebe si una variable esta vacia
y si esta vacia, rellenarla con texto en minusculas 
y mostrarlo en Mayuscula con negrita
*/

$var="boquita papa";

if (empty($var)) {
$var='hola que haces';
$varMayus= strtoupper ($var);
echo "<strong>$varMayus</strong>";    
} else {
    echo "<h1>La variable posee el valor: $var</h1>";
}










?>