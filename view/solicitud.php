<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
</head>
<link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
<script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="public/styles/estilos/global.css">

<body>
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
                <div class="text-center">
                    <p class="title-style text-center">Solicitudes</p>
                </div>
                <p class="text-center <?php if (isset($_GET['t'])) { echo $_GET['t'];} ?>"><?php if (isset($_GET['msg'])) {echo $_GET['msg'];} ?></p>
                <form action="./?op=<?php echo md5("enviarsolicitud") ?>" method="post">
                
                    <div class="row input-group">
                        <div class="mb-3">
                            <label for="" class="form-label font-weight-bold">Seleccione el producto:</label>
                            <select class="form-select m-2 inputs-style" name="producto" aria-label="Default">
                                <?php foreach ($producto as $p) { ?>
                                    <option value="<?php echo $p->equipo ?>"><?php echo $p->equipo ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label font-weight-bold">Seleccione el salon de clases:</label>
                            <select name="salon" class="form-select m-2 inputs-style" aria-label="Default">
                                <?php foreach ($salon as $s) { ?>
                                    <option value="<?php echo $s->salon ?>"><?php echo $s->salon ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label font-weight-bold">Ingrese la cantidad a solicitar:</label>
                                <input name="cantidad" type="number" class="form-control mb-3 inputs-style" id="floatingInput" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label font-weight-bold">Profesor que realiza la solicitud:</label>
                                <input name="profesor" value="<?php echo $_SESSION['user_name']; ?>" disabled type="text" class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Profesor">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label font-weight-bold">Correo del profesor:</label>
                                <input name="correo" value="<?php echo $datos->correo; ?>" disabled type="text" class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Correo">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label font-weight-bold">Fecha de solicitud:</label>
                                <input name="fecha" value="<?php echo date("Y-m-d") ?>" type="text" disabled class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Correo">
                            </div>
                        </div>
                    </div>
                    <div class="text-center d-grid gap-2 mt-2">
                        <button type="submit" class="btn-style">Enviar Solicitud</button>
                    </div>
                </form>
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