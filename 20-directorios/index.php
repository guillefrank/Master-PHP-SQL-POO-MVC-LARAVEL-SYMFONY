<?php
if (is_dir('mi_carpeta')) {
    echo"Ya existe la carpeta";
}else {
    mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');
}


//rmdir('mi_carpeta');

echo"<hr/>"."<h1>Contenido carpeta</h1>";
if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo!= '..') {
            echo $archivo."<br/>";
        }
        
    }
}

?>