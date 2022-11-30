<?php 

// print_r($_POST);

include '../Models/Conexion.php';

$codigoJugador = $_POST['id'];
$nombre = $_POST['inputNombre'];
$apellido = $_POST['inputApellido'];
$equipo = $_POST['inputEquipo'];
$goles = $_POST['inputGoles'];
$asistencias = $_POST['inputAsistencias'];
$rojas = $_POST['inputRojas'];
$amarillas = $_POST['inputAmarillas'];

$consulta = $bd->prepare("UPDATE estadistica SET Nombre = ?, Apellido = ?, Equipo = ?, Goles = ?, Asistencias = ?, Rojas = ?, Amarillas = ? WHERE id = ?");
$respuesta = $consulta->execute([$nombre,$apellido,$equipo,$goles,$asistencias,$rojas,$amarillas,$codigoJugador]);

if($respuesta){
    header("Location: ../index.php");
} else {
    echo "Un error ha ocurrido";
}
?>