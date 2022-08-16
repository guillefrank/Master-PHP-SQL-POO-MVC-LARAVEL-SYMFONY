<<<<<<< HEAD <?php
/*
FUNCIONES; 
Una funcion es un conjunto de instrucciones agrupadas
bajo un nombre concreto y que pueden reutilizarse solamente
invocando a la funcion tanta veces como la queramos

function nombreFuncion(&parametro){
    
    bloque de instrucciones
}
nombreFuncion($mi_parametro);
*/
//Ejemplo 1
/*
function muestraNombre(){
echo"<h3>Guillermo Vazquez </h3>";
echo"<h3>Gerardo Garcia</h3>";
echo"<h3>Matias Chiote </h3>";
echo"<h3>Rodrigo Avila </h3>";
echo"<h3>Rafa </h3><br/>";
}

//Invocar funcion
muestraNombre();

//Ejemplo 2
function tabla($numero){
    echo"<h3> Tabla de multiplicar del $numero </h3>";
    for ($i=1; $i <=10 ; $i++) { 
        $operacion=$numero*$i;
        echo"$numero * $i = $operacion <br/>";
    }
}
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
    tabla(14);
    tabla(5);
}else{
    echo"No hay numero para multiplicar para sacar la tabla";
}

//Varios Parametros a una funcion
/*
Ejemplo 3. Calculadora
*/
function calculadora($numero1,$numero2,$negrita=false){
    $suma= $numero1 + $numero2;
    $resta= $numero1 - $numero2;
    $multiplicacion= $numero1 * $numero2;
    $division= $numero1 / $numero2;

    $cadenaTexto="";
    if($negrita){
        $cadenaTexto.="<h1>";
    }
    $cadenaTexto.="Suma : $suma <br/>";
    $cadenaTexto.="Resta : $resta <br/>";
    $cadenaTexto.="Multiplicacion : $multiplicacion <br/>";
    $cadenaTexto.="Division : $division <br/>";
    $cadenaTexto.="<hr/>";
    if($negrita){
        $cadenaTexto.="</h1>";
        
    }
    $cadenaTexto.="<hr/>";

    return $cadenaTexto;

}
echo calculadora(10,2);
echo calculadora(2,2,true);
echo calculadora(10,7);
//Ejecutar funciones dentro de otra; Ejemplo 4

function getNombre($nombre){
    $texto="El nombre es: $nombre";
    return $texto;
}
function getApellidos($apellidos){
    $texto="Los apellidos son: $apellidos";
    return $texto;
}
function devuelveElNombre($nombre, $apellidos){
   $texto=getNombre($nombre)
    ."<br/>".
    getApellidos($apellidos);
    
    return $texto ;
}

echo devuelveElNombre("Guillermo"," Vazquez");
echo"<hr/>";
echo getNombre("Facundo");

?>