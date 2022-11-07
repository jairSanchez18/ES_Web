<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina princial</title>
    <link rel="stylesheet" href="public/styles/estilos/frtv.css">
</head>

<body>
    <!-- HEADER -->
    <header>
        <?php
        require_once('template/header.php');
        ?>
    </header>

    <div class="contenido contenedor">

        <!-- NAVEGACIÓN -->
        <nav class="navegacion contenedor">
            <?php
            require_once('template/menu.php');
            ?>
        </nav>

        <!-- MAIN -->
        <main class="contenido-main">
            <div class="shadow-sm p-3 bg-body rounded">
                <img class="img-main" src="public/images/imagesPP/imgUTP.jpg" alt="Campus UTP">
                <h2 class="titulo-main">Bienvenido <?php echo $_SESSION['user_name'] ?></h2>
            </div>
        </main>
    </div> <!-- FIN DE LA CLASE contenido -->

    <!-- FOOTER -->
    <footer class="footer">
        <?php
        require_once('template/footer.php');
        ?>
    </footer>
</body>

</html>