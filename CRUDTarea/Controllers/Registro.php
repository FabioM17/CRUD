<?php 

if (empty($_POST['inputNombre']) || empty($_POST['inputApellido']) || empty($_POST['inputEquipo']) || empty($_POST['inputGoles']) || empty($_POST['inputAsistencias']) || empty($_POST['inputRojas']) || empty($_POST['inputAmarillas'])) {
    echo "Hubo un error en el formulario";
    exit();
}

include '../Models/Conexion.php';

$nombre = $_POST['inputNombre'];
$apellido = $_POST['inputApellido'];
$equipo = $_POST['inputEquipo'];
$goles = $_POST['inputGoles'];
$asistencias = $_POST['inputAsistencias'];
$rojas = $_POST['inputRojas'];
$amarillas = $_POST['inputAmarillas'];

$consulta = $bd->prepare("INSERT INTO estadistica(Nombre,Apellido,Equipo,Goles,Asistencias,Rojas,Amarillas) VALUES (?,?,?,?,?,?,?)");
$resultado = $consulta->execute([$nombre,$apellido,$equipo,$goles,$asistencias,$rojas,$amarillas]);

if($resultado){
    header("Location: ../index.php");
} else {
    echo "Fallo la consulta";
}
?>
