<<<<<<< HEAD <?php 
/* Arrays
Un array es una coleccion o un conjunto de datos/valores,
bajo un unico nombre.Para acceder a esos valores podemos usar
un indice numero o alfanumerico.

*/
//var_dump($_GET);
// para ver el GET antes de la barra '/' poner ?variable='hola'
//y si se desean agregar mas variables poner '&' por ejemplo ?variable='hola'&numero=4

$pelicula='Batman';
$peliculas= array('Batman','Spiderman','Superman');
$cantantes=['2pac','Pitbull','Bad Bunny'];
//Array asociativo
$personas=array(
    'nombre' => 'Guillermo',
    'apellidos'=> 'Vazquez',
    'web'=>'https://www.facebook.com/guillermo.f.vazquez.33'
);
echo "<br/>";
echo $personas ['apellidos'];
echo "<br/>";
// var_dump($cantantes);
// var_dump($peliculas [1]);
echo $peliculas[0];
echo "<br/>";
echo $cantantes[2];
//Recorrer un array con FOR
echo '<h1>Listado de peliculas</h1>';
echo '<ul>';
for ($i=0; $i < count($peliculas) ; $i++) { 
    echo '<li>'.$peliculas[$i].'</li>';
    
}
echo '</ul>';

//Recorrer con Foreach
echo '<h1>Listado de cantantes</h1>';
echo '<ul>';

//recorrer el arreglo de cantantes y en cada iteracion creame una variable
//con el contenido del indice 
foreach ($cantantes as $cantante) {
        echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

//Array Multidimensionales
$contactos=array(
    array (
        'nombre'=> 'Antonio',
        'email'=> 'antonio@antonio.com'
    ),
    array (
        'nombre'=> 'Guillermo',
        'email'=> 'guillermo@guillermo.com'
    ),
    array (
        'nombre'=> 'Florencia',
        'email'=> 'florencia@florencia.com'
    ),
);
//acceso a elementos en arrays multidimensionales
echo $contactos[1]['nombre'];

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
};
?>