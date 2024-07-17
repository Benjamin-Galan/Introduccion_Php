<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => '200',
        'disponible' => true
    ],
    [
        'nombre' => 'television',
        'precio' => '300',
        'disponible' => true
    ],
    [
        'nombre' => 'monitor',
        'precio' => '400',
        'disponible' => false
    ],
];

echo "<pre>";
var_dump($productos);
echo "<pre/>";

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);



include 'includes/footer.php';