<?php 

include '../Models/Conexion.php';

$codigoJugador = $_GET['id'];
$consulta = $bd->prepare("DELETE FROM estadistica WHERE id = ?");
$resultado = $consulta->execute([$codigoJugador]);

if($resultado){
    header("Location: ../index.php");
} else {
    echo "Su eliminación ha fallado";
}

?>