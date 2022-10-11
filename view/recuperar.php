<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restablecer usuario</title>

  <link rel="stylesheet" href="../public/styles/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../public/styles/estilos/sesion.css">
  <link rel="stylesheet" href="../public/styles/estilos/global.css">
  <script src="../public/styles/bootstrap/bootstrap.bundle.min.js"></script>

</head>

<body class="sesion bg-dark">
  <div class="bg-white text-center p-4 box-style">
    <a href="./?op=iniciar">
      <img src="../public/Images/utp.svg" alt="" srcset="" width="150px" height="150px">
    </a>
    <p class="title-style">Recuperar cuenta</p>
    <hr>
    <p class="<?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>
    <form action="./?op=registrar" method="post" class="mb-4" name="formulario">
      <input type="email" name="correo" placeholder="Ingrese su correo" class="form-control mb-3 inputs-style" required autofocus>

      <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn-style">Recuperar</button>
      </div>

      <p>¿Tienes tu cuenta? <a href="?op=iniciar">Accede al sistema</a></p>

    </form>

    <p class="text-black-50">&#169 2022</p>
  </div>

</body>

</html>