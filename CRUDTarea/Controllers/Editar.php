<?php include '../Templates/Header.php' ?>

<?php 

include '../Models/Conexion.php';

$codigoJugador = $_GET['id'];

$consulta = $bd->prepare("SELECT * from estadistica WHERE id = ?");

$consulta->execute([$codigoJugador]);

$jugador= $consulta->fetch(PDO::FETCH_OBJ);

print_r($jugador);

?>

<div class="container">
    <div class="row justify-content-center">
    <div class="card bg-dark mb-4">
        <div class="card-header text-light"> Editar estadísticas del Jugador: </div>
            <form action="Update.php" method="POST">
                <div class="mb-2 ml-3">
                <label class="text-light">Nombre</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ingresar Nombre" name="inputNombre" value="<?php echo $jugador->Nombre ?>"  required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Apellido</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ingresar Apellido" name="inputApellido" value="<?php echo $jugador->Apellido ?>"  required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Equipo</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ingresar Equipo" name="inputEquipo" value="<?php echo $jugador->Equipo ?>" required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Goles</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Goles" name="inputGoles" value="<?php echo $jugador->Goles ?>" required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Asistencias</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Asistencias" name="inputAsistencias" value="<?php echo $jugador->Asistencias ?>"  required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Tarjetas Rojas</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Tarjetas Rojas" name="inputRojas" value="<?php echo $jugador->Rojas ?>" required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Tarjetas Amarillas</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Tarjetas Amarillas" name="inputAmarillas" value="<?php echo $jugador->Amarillas ?>" required>
                </div>
                <input name="id" type="hidden" value="<?php echo $jugador->id ?>">
                <input type="submit" class="btn btn-light mb-2 ml-2 mt-2" value="Modificar">
            </form>
    </div>
    </div>
    </div>
    <br/><br/>
    <br/><br/>


<?php include '../Templates/Footer.php' ?>