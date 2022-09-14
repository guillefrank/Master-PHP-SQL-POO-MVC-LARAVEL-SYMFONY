<?php
/*Bucle While
/ Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces como sea necesario
/ en base a la condicion.

while(condicion){
    bloque de instrucciones
}
//Recordar que el metodo $_GET se puede pedir en la URL del navegador.
?variable=y el numero que queramos pasar en el GET.
*/
$numero=0;
while($numero <= 100){
    echo $numero;
    if($numero!= 100){
        echo", ";
    }
    $numero++;
}


echo'<hr/>';
//Ejemplo 

if(isset ($_GET['numero'])){
    //cambiar tipo de dato(casteo de integer)
    $numero= (int) $_GET['numero'];
}else{
    $numero=1;
}
 echo "<h1>Tabla de multiplicar del numero $numero</h1>";

 $contador=0;
while($contador<=10){
    echo"$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

//DO WHILE
/* 
La condicion se evalua despues
do{
    //bloque de instrucciones
}while();

*/

echo"<hr/>";
$contador=1;
$edad=17;
do{
echo"Tienes acceso al local privado $contador <br/>";
$contador++;
}while($edad >= 18 && $contador <= 10);
?>