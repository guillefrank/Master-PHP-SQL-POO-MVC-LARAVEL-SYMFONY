<?php
/*
Sesion: Almacenar y persistir datos del usuario
mientras navega en un sitio web hasta que cierra sesion o cierra el 
navegador.
*/
// Inicar la sesion
session_start();
//variable local
$variable_normal="Soy guille";
//variable de sesion
$_SESSION['variable_persistente']="Hola soy una sesion activa";

echo$variable_normal."</br>";
echo $_SESSION['variable_persistente'];


?>