<?php
//Condicional IF
/*
if(condicion){
    instrucciones
}elser{
    otras instrucciones
}
//Operadores de comparacion
== IGUAL
=== Identico(que sea el mismo tipo de dato y contenido)
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
//Operadores Logicos
&& AND (y)
|| OR (o)
! NOT (no)
*/

//Ejemplo 1
$color='rojo';
if ($color=='rojo'){
    echo'El color es rojo';
}else{
    echo'El color no es rojo';
}
echo'<br/>';
//Ejemplo 2
$year=2028;
if($year<2022){
    echo'Es un año anterior al 2022';

}else{
    echo'Es un año posterior al 2022';

}
//Ejemplo 3

$edad=5;
$mayoria_edad=18;
$nombre='Facundo Bernachea';
$ciudad='Corrientes';
$pais='Argentina';

if($edad >= $mayoria_edad){
    echo '<h1>'.$nombre.' es mayor de edad'.'</h1>';
}else{
    echo'<h1>'.$nombre.' No es mayor de edad'.'</h1>';
    if($pais=='Argentina'){
        echo'<h2> Y su ciudad es '.$ciudad.'</h1>';
    }else{
        echo'<h2>No es de Argentina</h1>';
    }
}
echo'<hr/>';

//Ejemplo 4
$dia=3;
if($dia==1){
    echo"Es Lunes"; 
}elseif($dia==2){
    echo"Es Martes";
}elseif($dia==3){
    echo"Es Miercoles";
}elseif($dia==4){
    echo"Es Jueves";
}elseif($dia==5){
    echo"Es Viernes";
}else{
    echo"Es Finde";
}
//Ejemplo 5
echo'<hr/>';

$edad1=18;
$edad2=64;
$edad_oficial=30;
if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo'Esta en edad de trabajar';
}else{
    echo'No puede trabajar';
}

echo'<hr/>';

$pais='argentina';
if($pais == 'argentina' || $pais =='españa' || $pais=='colombia'){
    echo'En este pais se habla español';
}else{
    echo'En este pais no se habla español';
}

echo'<hr/>';
//Switch

$dia=4;
switch($dia){
    case 1:
        echo'Lunes';
        break;
   case 2:
        echo'Martes';
        break;
   case 3:
        echo'Miercoles';
        break;
   case 4:
        echo'Jueves';
        break;
   case 5:
        echo'Viernes';
        break;
   default:
        echo'Es finde';
}

//GOTO
echo'<hr/>';
goto marca;
echo'<h3>Instruccion 1</h3>';
echo'<h3>Instruccion 2</h3>';
echo'<h3>Instruccion 3</h3>';
echo'<h3>Instruccion 4</h3>';
marca:
echo'<h1>Me eh saltado 4 echos</h1>';

?>