<?php

include("../bd/conexion.php");

if (isset($_GET['id'])) {
    eliminar();
} else {
    echo "fallo en la conexion con la bd";
}

function eliminar()
{
    $conexion = conectar();
    $id = $_GET['id'];
    $enunciado = "DELETE FROM datos WHERE id = '$id'";
    $elimnar = devolverConsulta($conexion, $enunciado);

    if ($elimnar) {
        header("Location: ../presentacion/indiceVista.php");
    } else {
        echo "no se pudo eliminar";
    }
}
