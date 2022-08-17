<?php

/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt","a+");
//Leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}
//Escribir contenido
fwrite($archivo,"***Soy un texto metido desde PHP***");




//Cerrar archivo
fclose($archivo);
*/

//Copiar un fichero
// copy('fichero_texto.txt','fichero_copiado.txt') or die('error al copiar');

//renombrar un fichero
//rename('fichero_copiado.txt','archivo_renombrado.txt');

//Eliminar archivo
//unlink('archivo_renombrado.txt') or die("Error al borrar");

if (file_exists("fichero_texto.txt")) {
    echo "existe el fichero!!";}else {
        echo "no existe el fichero!";
    }

?>