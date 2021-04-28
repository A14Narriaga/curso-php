<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Formulario</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span class="fw-bold">PHP</span>escom</a>
        </div>
    </nav>
    <div class="container mt-5">
        <form action="action.php" method="POST">
            <div class="mb-3">
                <label for="nombre">Nombre(s)</label>
                <input required type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="paterno">Apellido paterno</label>
                <input required type="text" name="paterno" id="paterno" class="form-control">
            </div>
            <div class="mb-3">
                <label for="materno">Apellido materno</label>
                <input required type="text" name="materno" id="materno" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nacimiento">Fecha de nacimiento</label>
                <input required type="date" name="nacimiento" id="nacimiento" class="form-control">
            </div>
            <div class="mb-3">
                <label for="curp">CURP</label>
                <input required type="text" name="curp" id="curp" class="form-control">
            </div>
            <div class="mb-3">
                <label for="sexo">Sexo</label>
                <select required id="sexo" name="sexo" class="form-select">
                    <option value="">Seleccionar...</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                    <option>Otro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input required type="password" name="password" id="password" class="form-control">
            </div>
            <div class="text-end">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>