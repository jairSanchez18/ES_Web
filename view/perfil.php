<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de usuario</title>

  <script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="public/styles/estilos/global.css">
  <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">

  <script>
    function Validar() {
      var pass1 = document.formulario.password2.value;
      var pass2 = document.formulario.password3.value;

      if (pass1 != pass2) {
        alert("las nuevas contraseñas deben ser iguales");
        return false;
      }
    }
  </script>
</head>

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
        <p class="title-style text-center">Bienvenido a su perfil</p>
        <div class="text-center">
          <img src="public/Images/imagesPP/icon-user.png" alt="Foto de perfil" width="200" height="200">
          <div class="mb-3">
            <label for="nombre_usr" class="form-label font-weight-bold parrafo-style"><?php echo $resp->nombre; ?> <?php echo $resp->apellido; ?></label>
          </div>
          <br>
          <p class="<?php if (isset($_GET['t'])) {
                      echo $_GET['t'];
                    } ?>"><?php if (isset($_GET['msg'])) {
                            echo $_GET['msg'];
                          } ?></p>
        </div>
        <form action="./?op=vperfila" method="POST"">
          <div class=" mb-3">
          <label for="nombre_usr" class="form-label font-weight-bold parrafo-style">Nombre:</label>
          <br>
          <div class="d-grid gap-2 mb-3">
            <input type="text" class="inputs-style form-control" name="nombre" id="nombre" placeholder="" value="<?php echo $resp->nombre ?>" required>
          </div>
      </div>
      <div class="mb-3">
        <label for="apellido_usr" class="form-label font-weight-bold parrafo-style">Apellido:</label>
        <br>
        <div class="d-grid gap-2 mb-3">
          <input type="text" class="inputs-style form-control" name="apellido" id="apellido" placeholder="" value="<?php echo $resp->apellido ?>"required>
        </div>
      </div>
      <div class="mb-3">
        <label for="cedula_usr" class="form-label font-weight-bold parrafo-style">Cedula:</label>
        <br>
        <div class="d-grid gap-2 mb-3">
          <input type="text" class="inputs-style form-control" name="cedula" id="cedula" placeholder="" value="<?php echo $resp->cedula ?>" disabled>
        </div>
      </div>
      <div class="mb-3">
        <label for="facu_usr" class="form-label font-weight-bold parrafo-style">Facultad: </label>
        <br>
        <div class="d-grid gap-2 mb-3">
          <input type="text" class="inputs-style form-control" name="facultad" id="facultad" placeholder="" value="<?php echo $resp->facultad ?>"required>
        </div>
      </div>
      <div class="mb-3">
        <label for="sede_usr" class="form-label font-weight-bold parrafo-style">Sede:</label>
        <br>
        <div class="d-grid gap-2 mb-3">
          <input type="text" class="inputs-style form-control" name="direccion" id="direccion" placeholder="" value="<?php echo $resp->direccion ?>"required>
        </div>
        <label for="sede_usr" class="form-label font-weight-bold parrafo-style">Teléfono:</label>
        <br>
        <div class="d-grid gap-2 mb-3">
          <input type="number" class="inputs-style form-control" name="telefono" id="telefono" placeholder="" value="<?php echo $resp->telefono ?>"required>
        </div>
      </div>
      <div class="mb-3">
        <label for="correo_usr" class="form-label font-weight-bold parrafo-style">Correo Electronico:</label>
        <br>
        <div class="d-grid gap-2 mb-3">
          <input type="email" class="inputs-style form-control" name="correo" id="correo" placeholder="" value="<?php echo $resp->correo ?>" disabled>
        </div>
      </div>
      <div class="mb-3">
        <div class="d-grid gap-2 mb-3">
          <button type="submit" class="btn-style">Guardar informacion de perfil</button>
        </div>
        </form>

        <form action="./?op=vcontrasena" name="formulario" method="POST" onsubmit="return Validar()">
          <label for="exampleInputPassword1" class="form-label font-weight-bold parrafo-style">Cambiar contraseña</label>
          <input type="password" name="password1" placeholder="Contraseña actual" class="form-control mb-3 inputs-style">
          <input type="password" name="password2" placeholder="Nueva contraseña" class="form-control mb-3 inputs-style"required>
          <input type="password" name="password3" placeholder="Repetir contraseña" class="form-control mb-3 inputs-style"required><br>
          <div class="d-grid gap-2 mb-3">
            <button type="submit" class="btn-style">Guardar contraseña</button>
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