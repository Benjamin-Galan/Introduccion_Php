<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//sobreescribiendo el dato de un arreglo
$carrito[2] = 'Teclado'; 

//Ingresando un elemento en un nuevo espacio del arreglo
$carrito[3] = 'Telefono'; 

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Ingresar elementos al final de un arreglo
array_push($carrito, 'Parlantes');

//Ingresar elementos al inicio de un arreglo
array_unshift($carrito, 'Escritorio');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Otra forma de escribir arreglos
$carrito2 = array('arroz', 'frijoles', 'aceite');

echo "<pre>";
var_dump($carrito2);
echo "</pre>";

include 'includes/footer.php';