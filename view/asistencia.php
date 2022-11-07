<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de asistencia</title>
    <link rel="stylesheet" href="dev_cefv.css" type="text/css">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">

    <link rel="stylesheet" href="public/styles/estilos/global.css">
    <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
    <script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="">
    <header>
        <?php
        require_once('template/header.php');
        ?>
    </header>
    <div class="contenido contenedor">
        <nav class="navegacion contenedor">
            <?php
            require_once('template/menu.php');
            ?>
        </nav>
        <div class="contenido-main" style="padding: 10px;">
            <div class="shadow-sm p-3 bg-body rounded">
                <h1 class="title-style text-center mb-5">Lista de asistencia</h1>
                <p class="<?php if (isset($_GET['t'])) {
                    echo $_GET['t'];
                } ?>">
                    <?php if (isset($_GET['msg'])) {
                    echo $_GET['msg'];
                } ?>
                </p>
                <div class="table-responsive">
                    <table class="table fs-5">
                        <thead>
                            <tr class="text-center">
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Cédula</th>
                                <th>Asistencia</th>
                                <th>Porcentaje</th>
                                <th>Observaciones</th>
                                <th>Guardar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($asistencia as $a) { ?>
                            <tr>
                                <td>
                                    <?php echo $a->nombre ?>
                                </td>
                                <td>
                                    <?php echo $a->apellido ?>
                                </td>
                                <td>
                                    <?php echo $a->correo ?>
                                </td>
                                <td>
                                    <?php echo $a->cedula ?>
                                </td>
                                <td class="text-center"><img src="public/images/<?php echo $a->asistencia ?>" alt=""
                                        srcset="" width="24">
                                </td>
                                <td class="text-center">
                                    <?php echo $a->porcentaje ?> %
                                </td>
                                <form action="./?op=guardarobservaciones&id_asist=<?php echo $a->id ?>" method="post">
                                    <td><input name="observaciones" value="<?php echo $a->observaciones ?>"
                                            type="text" class="form-control inputs-style"></td>
                                    <td class="text-center"><button type="submit" class="btn btn-success"><i
                                                class="bi bi-save fs-4"></i></button></td>
                                </form>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        <?php
        require_once('template/footer.php');
        ?>
    </footer>

</body>

</html>