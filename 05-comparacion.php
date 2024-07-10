<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";


// mayor que
var_dump($num1 > $num2);
echo "<br/>";

// menor que
var_dump($num1 < $num2);
echo "<br/>";

// mayor o igual que
var_dump($num1 >= $num2);
echo "<br/>";

// menor o igual que
var_dump($num1 <= $num2);
echo "<br/>";

// menor o igual que (uso con igualdad de valores)
var_dump($num2 <= $num3);
echo "<br/>";

// igualdad de valores
var_dump($num2 == $num3);
echo "<br/>";

// igualdad de valores (diferente tipo de dato, convertido automáticamente)
var_dump($num2 == $num4);
echo "<br/>";

// igualdad estricta (compara valor y tipo de dato)
var_dump($num2 === $num4);
echo "<br/>";

// operador spaceship (compara y devuelve -1, 0, 1 si $num1 es menor, igual o mayor que $num2 respectivamente)
var_dump($num1 <=> $num2);
echo "<br/>";



include 'includes/footer.php';