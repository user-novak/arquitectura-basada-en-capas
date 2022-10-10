<?php

function conectar()
{
    $puerto = "127.0.0.1";
    $usuario = "root";
    $contrasena = "";
    $nombreBd = "prueba";
    $conexion = mysqli_connect($puerto, $usuario, $contrasena);
    mysqli_select_db($conexion, $nombreBd);
    return $conexion;
}

function consulta($conexion, $enunciado)
{
    $consulta = mysqli_query($conexion, $enunciado);
    $fila = mysqli_fetch_array($consulta);
    return $fila;
}
