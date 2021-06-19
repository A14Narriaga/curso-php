
<?php
$title = 'Cuestionarios';
include './components/Head.php'
?>

<body>
    <?php include('./components/navbar.php'); ?>
    <div class="container mt-5" style="max-width: 1350px;">
        <div class="d-grid gap-2">
            <a class="cuestionario" href="nuevo.php">
                <i>Nuevo cuestionario</i>
            </a>
        </div>
        <div id="cuestionarios" class="cuestionarios"></div>
    </div>
    <script src="./js/mostrar.js"></script>
    <?php include('./components/scripts.php'); ?>
</body>

</html>