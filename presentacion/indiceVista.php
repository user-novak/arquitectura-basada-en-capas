<?php
include("../logica/indice.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app de registro</title>
    <link rel="stylesheet" href="css/moduloIndice.css">
</head>

<body>
    <main>
        <section class="register">
            <a class="register-btn" href="registrarVista.php">registrar nuevo trabajador</a>
        </section>
        <table class="table">
            <thead class="table-success table-striped">
                <tr>
                    <th>Nombres</th>
                    <th>Correos</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                for ($i = 1; $i <= 13; $i++) { ?>
                    <tr>
                        <th><?php
                            $fila = devolverUsuario($i);
                            echo $fila['name']
                            ?></th>
                        <th><?php
                            $fila = devolverUsuario($i);
                            echo $fila['email']
                            ?></th>
                        <th><a href="../logica/eliminar.php?id=<?$i?>">eliminar</a></th>
                    </tr>
                <?php  }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>