<?php 
/*
Una cookie es un fichero que se almacena en el ordenador del usuario
que visita la web, con el de recordar datos o rastrear cierta informacion del mismo en la web.
*/

//Crear Cookies
//setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio);
setcookie("micookie","valor de mi galleta");

// Cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));
header('Location:ver_cookies.php');
?>