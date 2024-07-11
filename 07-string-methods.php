<?php include 'includes/header.php';

$nombreCliente = "      Benjamin Galan      ";
$nombre = "Juan Pablo";

//imprime la extension, toma en cuenta los espacios en blanco
echo strlen($nombreCliente);
var_dump($nombreCliente);


//eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
var_dump($texto);

//conversion a minusculas
echo strtolower($nombreCliente);

//conversion a mayusculas
echo strtoupper($nombreCliente);

//ejemplo de uso
$email1 = 'correo@correo.com';
$email2 = 'Correo@correo.com';

var_dump($email1 === $email2);
echo "<br/>";
var_dump(strtolower($email1) === strtolower($email2));

//reemplazar una cadena por otra
echo str_replace('Juan', 'J', $nombre);

//revisar si un string existe o no
echo strpos($nombre, 'pedro');

//concatenar strings y variables
$tipoCliente = "Premium";

echo "El cliente " . $nombre . " es " . $tipoCliente;

//esta forma solo funciona con comias dobles
echo "El cliente {$nombre} es {$tipoCliente}";

include 'includes/footer.php';