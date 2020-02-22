<?php 
$numero1 = 50;
$numero2 = 10;

echo "<strong>Taller 1</span> Generalidades de PHP</strong>";
echo "<br>";
echo "<br>";
echo "<strong>Ejercicios numero 1. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

echo "La suma de ".$numero1 ." + " .$numero2 ." es: ".($numero1 + $numero2);
echo "<br>";
echo "La resta de ".$numero1 ." - " .$numero2 ." es: ".($numero1 - $numero2);
echo "<br>";
echo "La multiplicación de ".$numero1 ." x " .$numero2 ." es: ".($numero1 * $numero2);
echo "<br>";
echo "La division de ".$numero1 ." / " .$numero2 ." es: ".($numero1 / $numero2);
echo "<br>";
echo "<br>";

echo "<strong>Ejercicios numero 2. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

$peso = 85;
$altura = 1.78;
$imc = $peso /($altura*$altura);
$estado;

echo "<strong>La clasificación del IMC es la siguiente: </strong>";
echo "<br>";
echo "<br>";

if ($imc <= 18.4){
    $estado = "Insuficiencia de peso";
}else if (18.5 <= $imc && $imc <= 24.9){
    $estado = "Peso Normal";
}else if (25 <= $imc && $imc <= 29.9){
    $estado = "Sobrepeso";
}elseif (30 <= $imc && $imc <=34.9){
    $estado = "Obesidad 1";
}elseif (35 <= $imc && $imc <=39.9){
    $estado = "Obesidad 2";
}elseif ($imc >=40){
    $estado = "Obesidad 3";
}

echo "Señor usuario su estatura es de: ".$altura ."y su peso es de: ".$peso ."su indice de masa corporal es de: ".$imc. " Por lo tanto usted tiene: ".$estado;
echo "<br>";
echo "<br>";

echo "<strong>Ejercicios numero 3. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";










?>