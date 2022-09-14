<?php
//FOR

/*for( expresion inicial, condicion, incremento contador){
bloque de instrucciones
}
*/

// $resultado=0;
// for ($i=0; $i <=100 ; $i++) { 
//     $resultado= $resultado + $i;
//     echo"<p>$resultado</p>";
// }
// echo "<h1>El resultado es: $resultado </h1>";

echo'<hr/>';
//Ejemplo 

if(isset ($_GET['numero'])){
    //cambiar tipo de dato(casteo de integer)
    $numero= (int) $_GET['numero'];
}else{
    $numero=1;
}
 echo "<h1>Tabla de multiplicar del numero $numero</h1>";

 for ($contador=1; $contador <=10 ; $contador++) { 
    if($numero == 45){
        echo"No se pueden mostrar estas operaciones prohibidas";
        break;
    }
    
    
    echo"$numero X $contador = ".($numero*$contador)."<br/>";
}
 


?>