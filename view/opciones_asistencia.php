<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver asistencia</title>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/estilos/global.css">
    <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
    <script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        jQuery(document).ready(function ($) {
            $(document).ready(function () {
                $('.mi-selector').select2();
            });
        });
    </script>
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
                <h1 class="title-style text-center mb-5">Informacion de asistencia</h1>
                <div>
                    <form action="./?op=<?php echo md5("vopcionesasistencia2") ?>" method="POST">
                        <div class="mt-5 mb-5">
                            <p class="mb-3 fw-bold">Seleccione la informacion a ver de la asistencia</p>
                            <hr>
                            <label for="">Seleccione el grupo de clases</label>
                            <select name="grupo" class="form-select inputs-style mb-3 mi-selector" id="">
                                <?php foreach($asistencia as $a){ ?>
                                    <option value="<?php echo $a->id; ?>"><?php echo $a->grupo; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn-style">Siguiente</button>
                        </div>
                    </form>
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