<?php
/*
Ejercicio 5
Crear un array con el contenido de la sgte tabla:
Accion  Aventura         Deportes
GTA     ASSASINS         FIFA 22
COD     CRASH            MOTO GP 22
PUBG    Prince of Persia PES 22

Cada fila debe ir en un fichero separado(includes).

*/

$tabla= array(
    "ACCION"=> array("GTA 5","COD","PUBG"),
    "AVENTURA"=>array("ASSASINS CREED","CRASH BANDICOOT","PRINCE OF PERSIA"),
    "DEPORTES"=>array("FIFA 22","MOTO GP 22","PES 22")
);
$categorias=array_keys($tabla);
?>
<!-- tr es fila y td columna -->
<table border="1">
    <?php require_once'ejercicio5/encabezados.php' ?>
    <?php require_once'ejercicio5/fila1.php' ?>
    <?php require_once'ejercicio5/fila2.php' ?>
    <?php require_once'ejercicio5/fila3.php' ?>







</table>