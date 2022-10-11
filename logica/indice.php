<?php
include("../bd/conexion.php");

function devolverUsuario($id)
{
    $conexion = conectar();
    $enunciado = "SELECT id, name, email FROM datos WHERE id=$id";
    $fila = devolverFila($conexion, $enunciado);
    return $fila;
}

function numeroFilas(){
    $conexion = conectar();
    $enunciado = "SELECT COUNT(*) total FROM datos;";
    $fila = devolverFila($conexion, $enunciado);
    return $fila;
}

function todosDatos(){
    $conexion = conectar();
    $enunciado = "SELECT * FROM datos";
    $fila = devolverConsulta($conexion, $enunciado);
    return $fila;
}
