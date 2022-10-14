<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de asistencia</title>
    <link rel="stylesheet" href="dev_cefv.css" type="text/css">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">

    <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
    <script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/styles/estilos/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @media (min-width:899px) {

            table th {
                border-bottom: 3px solid green;
                padding: 5px;
                width: 1080px;
            }

            table td {
                border-bottom: 1px solid green;
                padding: 5px;
            }

            table {
                font-size: 14px;
            }
        }

        @media (max-width:900px) {
            #div1 {
                width: 430px;
                overflow-x: auto;
            }

            table {
                font-size: 14px;
            }

            th {
                padding-left: 60px;
                padding-right: 60px;
            }

            table th {
                border-bottom: 3px solid green;
            }

            table td {
                border-bottom: 1px solid green;
                padding: 5px;
            }
        }
    </style>
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
                <h1 class="title-style text-center">Lista de asistencia</h1>
                <div class="dropdown m-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seleccione el salon de clases
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1LS131</a></li>
                        <li><a class="dropdown-item" href="#">1LS132</a></li>
                        <li><a class="dropdown-item" href="#">1LS222</a></li>
                    </ul>
                </div>
                <div class="dropdown m-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seleccione la Fecha
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">02/10/2022</a></li>
                        <li><a class="dropdown-item" href="#">10/11/2022</a></li>
                        <li><a class="dropdown-item" href="#">01/02/2022</a></li>
                    </ul>
                </div>
                <div id="div1">
                    <table class="text-center">
                        <thead>
                            <tr>
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
                            <tr>
                                <td>Keneth</td>
                                <td>Sanchez</td>
                                <td>ksan@utp</td>
                                <td>X-XXX-XXXX</td>
                                <td>
                                    <img src="public/Images/asistio.png" alt="" srcset="" width="20">
                                </td>
                                <td>5%</td>
                                <form action="#" method="POST">
                                    <td><input type="text" class="inputs-style" name="" id=""></td>
                                    <td><button type="submit" class="btn btn-success tam-style"><i class="fa-solid fa-floppy-disk"></i></button></td>
                                </form>
                            </tr>
                            <tr>
                                <td>Keneth</td>
                                <td>Sanchez</td>
                                <td>ksan@utp</td>
                                <td>X-XXX-XXXX</td>
                                <td><img src="public/Images/falto.png" alt="" srcset="" width="20"></td>
                                <td>5%</td>
                                <form action="#" method="POST">
                                    <td><input type="text" class="inputs-style" name="" id=""></td>
                                    <td><button type="submit" class="btn btn-success tam-style"><i class="fa-solid fa-floppy-disk"></i></button></td>
                                </form>

                            </tr>
                            <tr>
                                <td>Keneth</td>
                                <td>Sanchez</td>
                                <td>ksan@utp</td>
                                <td>X-XXX-XXXX</td>
                                <td><img src="public/Images/tardanza.png" alt="" srcset="" width="20"></td>
                                <td>5%</td>
                                <form action="#" method="POST">
                                    <td><input type="text" class="inputs-style" name="" id=""></td>
                                    <td><button type="submit" class="btn btn-success tam-style"><i class="fa-solid fa-floppy-disk"></i></button></td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
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