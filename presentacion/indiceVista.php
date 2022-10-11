<?php
include("../logica/indice.php");
$empleados = todosDatos();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app de registro</title>
    <link rel="stylesheet" href="css/moduloIndice.css">
    <script src="js/confirmacion.js" defer></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
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
                foreach ($empleados as $empleado) { ?>
                    <tr>
                        <td><?php
                            echo $empleado['name'];
                            ?></td>
                        <td><?php
                            echo $empleado['email'];
                            ?></td>
                        <td>
                            <a class="delete_link" href="../logica/eliminar.php?id=<?php echo $empleado['id']; ?>">
                                eliminar
                            </a>
                        </td>
                    </tr>
                <?php  }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>