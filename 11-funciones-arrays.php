<?php include 'includes/header.php';

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

//Ordenar elementos de un arreglo
$numeros = [5, 3, 4, 2, 1, 6, 7];
sort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenarlos de mayor a menor
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//ordenar arreglo asociativo
$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Benjamin'
];

asort($cliente); //Ordena el arreglo por valores 
arsort($cliente); //Ordena el arreglo por valores

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente); //Ordena el arreglo por llaves (ordenn alfabetico a - z)
krsort($cliente); //Ordena el arreglo por llaves (orden alfabetizo z - a)

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';