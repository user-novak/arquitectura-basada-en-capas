<?php
include("../logica/registrar.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de empleados</title>
    <link rel="stylesheet" type="text/css" href="css/moduloRegistrar.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <section class="container">
        <form method="post">
            <h1>registrar empleado</h1>
            <input type="text" name="name" placeholder="Nombre completo" autocomplete="off">
            <input type="email" name="email" placeholder="Email" autocomplete="off">
            <input type="submit" name="register">
        </form>
        <a class="btn-back" href="indiceVista.php">regresar al inicio</a>
    </section>
</body>

</html>