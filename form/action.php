<?php
// print_r( $_POST );
require('./database.php');
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nacimiento = $_POST['nacimiento'];
$curp = $_POST['curp'];
$sexo = $_POST['sexo'];
$password = $_POST['password'];
$query = "CALL phpescom.sp_insert_usuario(
    '$nombre',
    '$paterno',
    '$materno', 
    '$nacimiento', 
    '$curp', 
    '$sexo', 
    '$password'
)";
$db = new database();
$db->obtenerConexion();
$result = $db->create($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        span {
            font-weight: 500;
        }
    </style>
    <?php echo "<title>Hola $nombre</title>"; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Información</h2>
        <div class="card mb-3" style="width: 25rem;">
            <div class="card-header">
                <span>Nombre: </span><?php echo "$nombre $paterno $materno"; ?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span>Fecha de nacimineto: </span><?php echo "$nacimiento"; ?></li>
                <li class="list-group-item"><span>CURP: </span><?php echo "$curp"; ?></li>
                <li class="list-group-item"><span>Sexo: </span><?php echo "$sexo"; ?></li>
                <li class="list-group-item"><span>Password: </span><?php echo "$password"; ?></li>
            </ul>
        </div>
        <p class="fw-bold"><?php echo $result ? "Registro éxitoso" : "No se ha insertado" ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>