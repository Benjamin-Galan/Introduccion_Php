<?php 
declare(strict_types=1);
include 'includes/header.php';

//funcion que recibe un booleano y retorna un string
// function usuarioAutenticado(bool $autenticado)  : string{
//     if ($autenticado){
//         return "Autenticado";
//     } else {
//         return "No autenticado";
//     }
// }

//funcion que puede imprimir un string
// function usuarioAutenticado(bool $autenticado)  : void{
//     if ($autenticado){
//         echo "Autenticado";
//     } else {
//         echo "No autenticado";
//     }
// }

//funcion que puede retornar unn string u otro valor
// function usuarioAutenticado(bool $autenticado)  : ?string{
//     if ($autenticado){
//         return "Autenticado";
//     } else {
//         return 20;
//     }
// }

//funcion que puede retornar uno o otro valor con uniones con datos que esten definidos
function usuarioAutenticado(bool $autenticado)  : string|int{
    if ($autenticado){
        return "Autenticado";
    } else {
        return 20;
    }
}
$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';