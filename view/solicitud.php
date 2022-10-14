<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
</head>
<link rel="stylesheet" href="../public/styles/bootstrap/bootstrap.min.css">
<script src="../public/styles/bootstrap/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../public/styles/estilos/global.css">

<body>
    <header>
        <?php
        require_once('./template/header.php');
        ?>
    </header>
    <div class="contenido contenedor">
        <nav class="navegacion contenedor">
            <?php
            require_once('./template/menu.php');
            ?>
        </nav>
        <div class="contenido-main" style="padding: 10px;">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="text-center">
                    <p class="title-style text-center">Solicitudes</p>
                </div>
                <form action="#">
                    <select class="form-select m-2 inputs-style" aria-label="Default">
                        <option selected>Seleccione el producto</option>
                        <option value="copias">copias</option>
                        <option value="cables">cables</option>
                        <option value="proyector">proyector</option>
                    </select>
                    <hr>
                    <div class="row input-group">
                        <div class="col">
                            <input type="number" class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Ingrese la cantidad">
                            <input type="text" class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Ingrese el salon de clases">
                            <input type="text" disabled class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Profesor">
                            <input type="text" disabled class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Correo">
                            <input type="date" disabled class="form-control mb-3 inputs-style" id="floatingInput" placeholder="Fecha solicitado">
                        </div>
                    </div>
                    <div class="m-3">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ingrese el archivo</label>
                            <input class="form-control tam-style" type="file" id="formFile">
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
        require_once('./template/footer.php');
        ?>
    </footer>
</body>

</html>