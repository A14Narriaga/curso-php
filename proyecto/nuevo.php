<?php
$title = 'Nuevo cuestionario';
include './components/Head.php'
?>

<body>
    <?php include('./components/Navbar.php'); ?>
    <div class="container mt-5" style="max-width: 1350px;">
        <form>
            <div class="headCuestionario mb-1">
                <h5>Nuevo cuestionario</h5>
                <div class="d-grid gap-2 col-4 mx-8">
                    <button type="button" class="btn btn-primary" onclick="create()">Crear</button>
                </div>
            </div>
            <section class="contentCuestionario mb-4">
                <div class="mb-3">
                    <input required type="text" placeholder="Cuestionario sin titulo" name="nombre" id="nombre" class="form-control myInput">
                </div>
                <div class="mb-3">
                    <input required type="text" placeholder="Descripción" name="clave" id="clave" class="form-control myInput">
                </div>
            </section>
            <section class="newPregunta">
                <input required type="text" placeholder="Pregunta" name="pregunta" id="pregunta" class="form-control myInput">
                <div class="option">
                    <i class="bi bi-app"></i>
                    <input required type="text" placeholder="Opcion 1" name="pregunta" id="pregunta" class="form-control myInputOpc w-50">
                </div>
                <div class="option">
                    <i class="bi bi-app"></i>
                    <input required type="text" placeholder="Agregar opcion" name="pregunta" id="pregunta" class="form-control myInputOpc w-50">
                </div>
            </section>
            <div class="add text-center mt-3">
                <i class="bi bi-plus-circle"> Agregar pregunta</i>
            </div>
        </form>
    </div>
    <script src="./js/nuevo.js"></script>
    <?php include('./components/Scripts.php'); ?>
</body>

</html>