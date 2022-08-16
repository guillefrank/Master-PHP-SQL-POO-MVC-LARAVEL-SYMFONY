<?php
// Constante es un contender de informacion que no puede variar

define('nombre','Guillermo Vazquez');
define('web','https://github.com/guillefrank');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

// Variable

$web='https://github.com/guillefrank/Proyecto-Crud';
echo '<h1>'.$web.'</h1>';

//Constantes predefinidas

echo PHP_OS;
echo ' PHP VERSION  ';
echo PHP_VERSION;
echo ' PHP DIRECCION ';
echo PHP_EXTENSION_DIR;
echo ' Linea de codigo ';
echo __LINE__;
echo ' Directorio ';
echo __DIR__;

?>