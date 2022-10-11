<?php
include("../bd/conexion.php");

function todosDatos(){
    $conexion = conectar();
    $enunciado = "SELECT * FROM datos";
    $fila = devolverConsulta($conexion, $enunciado);
    return $fila;
}
