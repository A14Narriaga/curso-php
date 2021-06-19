
<?php
$title = 'Nuevo cuestionario';
include './components/Head.php'
?>

<body>
    <?php  include('./components/Navbar.php'); ?>
    <div class="container mt-5" style="max-width: 1350px;">
        <h5 class="text-center mt-5">Nuevo cuestionario</h5>
        <form>
        <div class="mb-3">
                <label for="clave">Clave</label>
                <input required type="text" name="clave" id="clave" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input required type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="create()">Aceptar</button>
            </div>
        </form>
    </div>
    <script src="./js/nuevo.js"></script>
    <?php  include('./components/Scripts.php'); ?>
</body>

</html>