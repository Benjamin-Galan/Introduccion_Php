<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Juan', 'Pedro', 'Maria', 'Andrea');
$cliente = [
    'nombre' => 'Alex',
    'saldo' => 500
];

//funcion empty - revisa si un arreglo está vacio
var_dump(empty($clientes4));
var_dump(empty($clientes3));
var_dump(empty($clientes2));

echo "<br>";

//funcion isset - revisa si un arreglo esta creado o una propiedad definida
var_dump(isset($clientes4));
var_dump(isset($clientes3));
var_dump(isset($clientes2));
var_dump(isset($clientes));
var_dump(isset($cliente));

echo "<br>";

//permite revisar si una propiedad de un arreglo asociativo existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));


include 'includes/footer.php';