<?php
include("../bd/conexion.php");

function devolverUsuario($id)
{
    $conexion = conectar();
    $enunciado = "SELECT id,name,email FROM datos WHERE id=$id";
    $fila = consulta($conexion, $enunciado);
    return $fila;
}

