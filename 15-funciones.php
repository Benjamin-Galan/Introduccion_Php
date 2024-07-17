<?php 
declare(strict_types=1);
include 'includes/header.php';


function sumar(int $num1 = 0, int $num2 = 0){
    echo $num1;
    echo $num1 + $num2;
}

//parametros nombrados
sumar(num2: 10, num1: 20);

sumar(10);
echo "<br/>";
sumar(100, 200);
echo "<br/>";
sumar(50, 30);



include 'includes/footer.php';