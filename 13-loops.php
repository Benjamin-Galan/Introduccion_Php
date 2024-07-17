<?php include 'includes/header.php';

//Inicializacion
$i = 0;

//revisa primero si la condicion es verdadera
while($i < 10) {
    echo $i . "<br>";

    $i++;
}

//ejecuta el codigo y luego revisa la condicion
do {
    echo $i . "<br>";

    $i++;
} while ($i < 10);

echo "<br/>";

//ejecuta el codigo mientras se cumpla la condicion
for($i = 1; $i < 100; $i++){
    if ($i % 3 === 0 && $i % 5 === 0){
        echo $i . " - fizz-buzz <br/>";
    } else if ($i % 3 === 0){
        echo $i . " - fizz <br/>";
    } else if ($i % 5 === 0){
        echo $i . " - buzz <br/>";
    } else {
        echo $i . "<br/>";
    }
}



$clientes = ['pedro', 'juan', 'karen'];

foreach($clientes as $cliente){
    echo $cliente . "<br/>";
}

for ($i = 0; $i < count($clientes); $i++){
    echo $clientes[$i] . "<br/>";
}

echo "<br/>";

$cliente = [ 
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach ($cliente as $key => $valor){
    echo $key . " - " . $valor . "<br/>";
}
include 'includes/footer.php';