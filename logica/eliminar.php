<?php

function eliminarUsuario($id)
{
    include("../bd/conexion.php");
    $conexion = conectar();

    $sql = "DELETE FROM datos WHERE id='$id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        Header("Location: alumno.php");
    }
}

if (isset($_GET['id'])) {
   eliminarUsuario($_GET['id']);
}
