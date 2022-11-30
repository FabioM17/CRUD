<?php

$nombre_bd = "jugadores";
$usuario = "root";
$contrasena = "";

try {
    //PDO recibe varias bases de datos.
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contrasena
    );

} catch (Exception $e) {
    //manejo de excepciones(errores).
    echo "Su conexión fue inválida porque: ".$e->getMessage();
}

?>