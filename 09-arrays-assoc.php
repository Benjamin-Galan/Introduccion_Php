<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan ',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

$cliente['codigo'] = 12345545;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
