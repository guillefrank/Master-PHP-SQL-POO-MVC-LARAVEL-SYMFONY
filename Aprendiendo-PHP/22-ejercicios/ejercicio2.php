<?php
/*
Ejercicio 2
1.Debe ser una funcion
2.Validar un email con filter_var
3.Recoger variable por GET y validarla
4.Mostrar el resultado
*/
function validarEmail($email){
    $status="No valido";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status="Valido";
    }

    return $status;
}
if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']);
}else {
    echo "Pasa por GET el email";
}

?>