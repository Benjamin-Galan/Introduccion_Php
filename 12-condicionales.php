<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if ($autenticado || $admin){
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, por favor inicie sesion';
}

$cliente = [
    'nombre' => 'Juan ',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<br>";

if (!empty($cliente)){
    echo "El arreglo de cliente no está vacio";
    
    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo";
    } else {
        echo "No tiene saldo";
    }
}

echo "<br>";

if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === "premium"){
    echo "El cliente es premium";
} else {
    echo "No hay cliente definido";
}

echo "<br>";

//switch
$tecnologia = 'Javascript';

switch($tecnologia){
    case 'Php':
        echo "Php, un excelente lenguaje";
        break;
    case 'Javascript':
        echo "Genial, el lenguaje de la web";
        break;
    default:
        echo "Un lenguaje desconocido";
        break;
}

include 'includes/footer.php';