<?php include 'Templates/Header.php' ?>

<?php include 'Models/Conexion.php';

$sentencia = $bd->query("SELECT * from estadistica");

$jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($jugadores);

?>

    <div class="container">
        <div class="row">
            <table class=" table table-hover">
                <thead class="table-dark">
                    <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Goles</th>
                            <th scope="col">Asistencias</th>
                            <th scope="col"><img src="https://i.imgur.com/0y7S6rn.png" alt="Tarjeta roja"></th>
                            <th scope="col"><img src="https://i.imgur.com/VnGvT2P.png" alt="Tarjeta Amarilla"></th>
                            <th scope="col">Acciones</th>
                            </tr>
                </thead>
                <tbody>
                    <?php foreach ($jugadores as $dato) { ?>
                    <tr>
                            <th scope="row"><?php echo $dato->id ?></th>
                            <td><?php echo $dato->Nombre ?></td>
                            <td><?php echo $dato->Apellido ?></td>
                            <td><?php echo $dato->Equipo ?></td>
                            <td><?php echo $dato->Goles ?></td>
                            <td><?php echo $dato->Asistencias ?></td>
                            <td><?php echo $dato->Rojas ?></td>
                            <td><?php echo $dato->Amarillas ?></td>
                            <td><a href="Controllers/Editar.php?id=<?php echo $dato->id ?>" class="btn btn-warning">Editar</a><a href="Controllers/Eliminar.php?id=<?php echo $dato->id ?>" class="btn btn-danger ml-2">Eliminar</a></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
    <div class="card bg-dark mb-4">
        <div class="card-header text-light"> Ingrese datos del jugador: </div>
            <form action="Controllers/Registro.php" method="POST">
                <div class="mb-2 ml-3">
                <label class="text-light">Nombre</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ingresar Nombre" name="inputNombre"  required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Apellido</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ingresar Apellido" name="inputApellido"  required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Equipo</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ingresar Equipo" name="inputEquipo" required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Goles</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Goles" name="inputGoles" required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Asistencias</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Asistencias" name="inputAsistencias"  required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Tarjetas Rojas</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Tarjetas Rojas" name="inputRojas" required>
                </div>
                <div class="mb-2 ml-3">
                <label class="text-light">Tarjetas Amarillas</label>
                <input class="form-control form-control-sm" type="number" placeholder="Ingresar Tarjetas Amarillas" name="inputAmarillas" required>
                </div>
                
                <input type="submit" class="btn btn-light mb-2 ml-2 mt-2" value="Registrar">
            </form>
    </div>
    
    </div>
    <br/><br/>
    <br/><br/>
<?php include 'Templates/Footer.php' ?>
