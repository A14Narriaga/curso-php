<?php 
    // print_r($_SERVER);
    require('../form/database.php');
    $curp = $_POST['curp'];
    $clave = $_POST['password'];
    // echo $curp." - ".$clave;
    $db = new database();
    $db->obtenerConexion();
    $sql = "CALL phpescom.sp_autentica('$curp','$clave')";
    $result = $db->read($sql);
    print_r($result);
    if($result[0]->respuesta == 1) {
        echo "Autenticación éxitosa"; 
        ?>
        <script>
            setTimeout(() => {
                window.location.replace("dashboard.php")
            }, 3000)
        </script>
        <?php
    }
    else {
        echo "Error: ".$result[0]->mensaje;
        ?>
         <script>
            setTimeout(() => {
                window.location.replace("login.html")
            }, 3000)
        </script>
        <?php
    }
?>