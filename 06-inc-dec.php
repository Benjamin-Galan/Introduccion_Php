<?php include 'includes/header.php';

$numero1 = 10;
echo $numero1++;  // Postincremento: muestra 10 (luego incrementa a 11)
echo $numero1;    // Muestra 11

$numero2 = 20;
$numero2++;        // Postincremento: incrementa $numero2 de 20 a 21
echo $numero2;     // Muestra 21

$numero3 = 30;
echo ++$numero3;   // Preincremento: incrementa $numero3 de 30 a 31, luego muestra 31

$numero4 = 40;
echo --$numero4;   // Predecremento: decrementa $numero4 de 40 a 39, luego muestra 39

$numero4 = 40;
echo $numero4--;   // Postdecremento: muestra 40 (luego decrementa a 39)



include 'includes/footer.php';