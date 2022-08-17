<!-- Validacion de formulaciones, recibir error y mostrarlo, expresiones regulares con php, diferentes metodos de validacion -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios</title>
</head>

<body>
    <h1>Validar formularios en PHP</h1>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan_valores') {
            echo '<strong style="color:red;">Introduce todos los datos en todos los campos del formulario</strong>';
        }

        if ($error == 'nombre') {
            echo '<strong style="color:red;">Introduce el nombre correctamente</strong>';
        }

        if ($error == 'apellidos') {
            echo '<strong style="color:red;">Introduce el apellido correctamente</strong>';
        }
        if ($error == 'edad') {
            echo '<strong style="color:red;">Introduce la edad correspondiente</strong>';
        }
        if ($error == 'password') {
            echo '<strong style="color:red;">Contraseña no valida, introduce una contraseña de mas de 5 caracteres</strong>';
       }
       if ($error == 'email') {
        echo '<strong style="color:red;">El email es erroneo</strong>';
   }
    }
    ?>

    <form action="procesarForm.php" method="POST">

        <label for="nombre">Nombre</label><br />
        <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" /><br />

        <label for="apellidos">Apellidos</label><br />
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+" /><br />

        <label for="edad">Edad</label><br />
        <input type="number" name="edad" required="required" pattern="[0-9]+" /><br />

        <label for="email">Email</label><br />
        <input type="text" name="email" required="required" /><br />

        <label for="pass">Contraseña</label><br />
        <input type="password" name="pass" required="required" minlength="5" /><br />

        <input type="submit" value="Enviar" />





    </form>

</body>

</html>