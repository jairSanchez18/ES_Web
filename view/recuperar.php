<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restablecer usuario</title>

  <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="public/styles/estilos/global.css">
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
    <a href="./?op=<?php echo md5("vlogin")?>">
      <img src="public/Images/utp.svg" alt="" srcset="" width="150px" height="150px">
    </a>
    <p class="title-style">Recuperar cuenta</p>
    <hr>
    <p class="<?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>
    <form action="./?op=<?php echo md5("recuperarcontrasena") ?>" method="post" class="mb-4" name="formulario">
      <input type="email" name="correo" placeholder="Ingrese su correo" class="form-control mb-3 inputs-style" required autofocus>
      
      <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn-style">Recuperar</button>
      </div>

      <p>¿Tienes tu cuenta? <a href="?op=<?php echo md5("vlogin") ?>">Accede al sistema</a></p>

    </form>

    <p class="text-black-50">&#169 2022</p>
  </div>

</body>

</html>