<?php

/*
Ejercicio 3. 
Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
uno para sumar, restar, dividir y multiplicar.
*/
$resultado=false;
if (isset($_POST['n1']) && isset($_POST['n2'])) {
  
   if (isset($_POST['sumar'])) {
    $resultado= "El resultado es ".($_POST['n1'] + $_POST['n2']);
   }
   if (isset($_POST['restar'])) {
    $resultado= "El resultado es ".($_POST['n1'] - $_POST['n2']);
   }
   if (isset($_POST['multiplicar'])) {
    $resultado= "El resultado es ".($_POST['n1'] * $_POST['n2']);
   }
   if (isset($_POST['dividir'])) {
    $resultado= "El resultado es ".($_POST['n1'] / $_POST['n2']);
   }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Ejercicio 3</h1>
    <h2>Calculadora PHP</h2>
    <form action="" method="post">
        <label for="n1">Numero 1</label>
        <input type="number" name="n1" /><br />


        <label for="n2">Numero 2</label>
        <input type="number" name="n2" /><br />
        <hr />

        <input type="submit" value="Sumar" name="sumar" />
        <input type="submit" value="Restar" name="restar" />
        <input type="submit" value="Multiplicar" name="multiplicar" />
        <input type="submit" value="Dividir" name="dividir" />

    </form>
    <?php 
    //RESULTADO
    if ($resultado != false):
        echo"<h2>$resultado</h2>";
    endif;
    ?>
</body>

</html>