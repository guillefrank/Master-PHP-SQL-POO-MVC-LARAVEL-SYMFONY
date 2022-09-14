<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p>
            <input type=" text" name="nombre" placeholder="Ingrese nombre" />
        </p>
        </br>
        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido" required="required" placeholder="Ingrese apellido" /></p>
        </br>
        <label for="boton">Boton</label>
        <p>
            <input type="button" name="boton" value="Clickeame">
        </p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre: <input type="checkbox" name="sexo" value="hombre" />
            Mujer: <input type="checkbox" name="sexo" value="mujer" />
        </p>

        <label for="color">Color:</label>
        <p>
            <input type="color" name="color" />
        </p>

        <label for="fecha">Fecha:</label>
        <p>
            <input type="date" name="fecha" />
        </p>

        <label for="correo">Email:</label>
        <p>
            <input type="email" name="correo" />
        </p>

        <label for="archivo">Archivo:</label>
        <p>
            <input type="file" name="archivo" multiple />
        </p>

        <label for="numero">Numero:</label>
        <p>
            <input type="number" name="numero" />
        </p>

        <label for="pass">Contraseña:</label>
        <p>
            <input type="password" name="pass" />
        </p>

        <label for="continente">Continente:</label>
        <p>
            America del Sur: <input type="radio" name="continente" value="America del Sur" />
            America del Norte: <input type="radio" name="continente" value="America del Norte" />
            Europa: <input type="radio" name="continente" value="Europa" />
        </p>

        <label for="web">Pagina Web:</label>
        <p>
            <input type="url" name="web" />
        </p>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        </br>
        Peliculas:
        <select name="peliculas" id="">
            <option value="Spiderman">Spiderman</option>
            <option value="Batman">Batman</option>
            <option value="Superman">Superman</option>
        </select>
        </br>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>