<?php
/*
Ejercicio 6; Mostrar una tabla HTML con las tablas de multiplicar
del 1 al 10.
*/
echo"<table border='1'><tr>";//inicio de la tabla

echo"<tr>";//fila 1 de celdas
    for ($cabecera=1; $cabecera <= 10; $cabecera++) { 
        echo"<td>Tabla del $cabecera</td>";
    }

echo"</tr>";//cierra fila 1 de celdas

echo"<tr>";//inicio fila 2 de celdas

    for($i=1; $i<=10; $i++){

        echo"<td>";
           for ($x=0; $x <=10; $x++) { 
            echo"$x * $i = ".($x*$i)."<br>";
           }
        echo"</td>";

    }


echo"</tr>";//cierre de fila 2 de celdas

echo"</table>";// fin de la tabla

?>