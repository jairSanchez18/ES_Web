<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesion</title>

  <link rel="stylesheet" href="public/styles/estilos/global.css">
  <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
  <script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>

  <style>
    .sesionstyle {
      margin: 50px 400px 0 400px;
    }

    @media (max-width:1080px) {
      .sesionstyle {
        margin: 10px;
      }
    }
  </style>
</head>

<body class="bg-dark sesionstyle">
  <div class="bg-white text-center p-4 box-style">
    <a href="./?op=vlogin">
      <img src="public/Images/utp.svg" alt="" srcset="" width="150px" height="150px">
    </a>
    <p class="title-style">Inicio de Sesion</p>
    <hr>
    <p class="<?php if (isset($_GET['t'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>
    <form action="./?op=validar" method="POST" class="mb-4">
      <input type="email" name="correo" placeholder="Ingrese su correo" class="form-control mb-3 inputs-style">
      <input type="password" name="contrasena" placeholder="Ingrese su contraseña" class="form-control mb-3 inputs-style">

      <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn-style">Iniciar Sesion</button>
      </div>

      <p>¿Olvido su contraseña?
        <a href="./?op=vrecuperar">Recuperar</a>
      </p>

    </form>

    <p class="text-black-50">&#169 2022</p>
  </div>

</body>

</html>