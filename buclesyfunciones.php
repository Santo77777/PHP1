<?php

include('funciones.php');


$clase1 = "Clase 4 bucles, arreglos y funciones";
echo $clase1;

//Arreglos indexado 

$arreglo= array("Santiago", "Andres", "Maria", "Emilio", "Carolina");
echo "<br>";
print_r($arreglo);
echo "<br>*********************************************************************";
echo "<br>";




//Arreglos asociativos 

echo("Array asociativos:");

$arreglo = array('usuario1'=>"Santiago", 'usuario2'=> "Andres", 'usuario3'=>"Maria", 'usuario4'=>"Emilio");
echo "<br>";
print_r($arreglo);
echo "<br>*********************************************************************";
echo "<br>";




// Tamaño de arreglo
echo("Ver el tamaño de un arreglo:");

$size= count($arreglo);
echo "<br>";
echo ("El tamaño de nuetro arrelgo es: ". $size);
echo "<br>*********************************************************************";
echo "<br>";




//Bucle FOR

for($centinela=0; $centinela<=10; $centinela++){

    echo("El valor de centinela es: " . $centinela . "<br>");
}

echo "<br>*********************************************************************";
echo "<br>";



//Bucle FOR para recorrer arreglos

echo("FOR para recorrer arrelgos <br>");

$arreglo= array("Santiago", "Andres", "Maria", "Emilio", "Carolina");

for($x =0; $x < count($arreglo); $x++){
    echo("<br>" . $arreglo[$x] . "<br>");

}

$arreglo2= array("Santo", "Es un Hacker");
for($i=0; $i< count($arreglo2); $i++){
    echo("<br>" . $arreglo2[$i] );
}

echo "<br>*********************************************************************";
echo "<br>";

//Bucle FOREACH arreglo 

echo("Bucle FOREACH arreglo <br>");

$arreglo= array('usuario1'=>"Santiago", 'usuario2'=> "Andres", 'usuario3'=>"Maria", 'usuario4'=>"Emilio");

foreach($arreglo as $clave=>$valor){
    echo "La clave es: " . $clave;
    echo "<br>" . ($valor) . "<br>"; 
    echo "<br>";
}

$arreglo3= array('user1' => "Camilo", 'user2'=>"Sergio");

foreach($arreglo3 as $key=>$valor){
    echo "La clave es: " . $key . " y el valor es: " . $valor;
    echo "<br>";
}

echo "<br>*********************************************************************";
echo "<br>";

//Bucle foreach para arreglo indexado  en valor

echo "En VALOR ";
$arreglo= array("Santiago", "Andres", "Maria", "Emilio", "Carolina");
foreach($arreglo as $clave=>$valor){
    echo "<br> La CLAVE del cajon es: " . $clave . " y el valor es: " . $valor;
    echo "<br>";
    
}
echo "<br>*********************************************************************";
echo "<br>";


// Arrelgos multidimensionales en php
echo "<br>*********************************************************************";
echo "<br>";
echo "Arrelgos multidimensionales en php: ";
echo "<br>";
echo "<br>";

$usuarios= array (
    'usuario1'=> array('<strong>Nombre</strong>'=>"Santiago", '<strong>Edad</strong>'=>30, '<strong>Genero</strong>'=>"M"),
    'usuario2'=> array('<strong>Nombre</strong>'=>"Carolina", '<strong>Edad</strong>'=>40, '<strong>Genero</strong>'=>"F"),
    'usuario3'=> array('<strong>Nombre</strong>'=>"Juliana", '<strong>Edad</strong>'=>36, '<strong>Genero</strong>'=>"F"),
    'usuario4'=> array('<strong>Nombre</strong>'=>"Yamilie", '<strong>Edad</strong>'=>65, '<strong>Genero</strong>'=>"F")

);



print_r($usuarios);


//ciclos foeach para acceder a los elementos del arreglo multidimencinales

echo "<br>*********************************************************************";
echo "<br>";
echo "ciclos foeach para acceder a los elementos del arreglo multidimencinales";

foreach($usuarios as $clavesArreglosUnidi=>$arreglosUnidi){
    echo($clavesArreglosUnidi);
    echo "<br>";
    print_r($arreglosUnidi);
    echo "<br>";
    foreach($arreglosUnidi as $claves=>$valores){
    
        echo($claves." : ");
        echo($valores);
        echo "<br>";
    }

}

//calcular la edad de dos personas

echo "<br>*********************************************************************";
echo "<br>";
calcularEdad(1955);
echo "<br>";
calcularEdad2(1988, 2020);
$edad3=calcularEdad3(2020, 1999);
echo "<br>";
echo("La edad de la persoan es: " . $edad3);


//Arreglo que se llena con una funcion 

$edades=array('edad1'=> calcularEdad3(2020,1999), 'edad2'=>calcularEdad3(2020,1991));
print_r($edades);


?>