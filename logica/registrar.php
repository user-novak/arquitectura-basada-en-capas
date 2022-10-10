<?php

include("../bd/conexion.php");
$conexion = conectar();


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
        $nombre = trim($_POST['name']);
        $correo = trim($_POST['email']);
        $fechaCreacion = date("d/m/y");
        $consulta = "INSERT INTO datos(name, email, create_date) VALUES ('$nombre','$correo','$fechaCreacion')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
?>
            <h3 class="ok">¡Has inscripto un usuario correctamente!</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor complete los campos!</h3>
<?php
    }
}

?>