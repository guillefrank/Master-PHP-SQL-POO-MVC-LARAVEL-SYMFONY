<?php
/*
Ejercicio 7. Hacer un programa que muestre todos los 
numeros impares que nos lleguen por URL($_GET)

*/

if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1= $_GET['numero1'];
    $numero2= $_GET['numero2'];
    if($numero1<$numero2){
        for ($i=$numero1; $i <= $numero2 ; $i++) { 
            if($i%2 != 0){
                echo"<h4>$i Es Impar</h4>";
            }else{
                echo"<h4>$i Es Par</h4>";
            }
            
            
        }
    }else{
        echo"<h2>El numero 1 debe ser menor al numero 2</h2>";
    }
    

}else{
    echo"<h1>Los parametros GET no existen</h1>";
}

?>