<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de usuario</title>

  <link rel="stylesheet" href="../public/styles/bootstrap/bootstrap.min.css">
  <script src="../public/styles/bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../public/styles/estilos/global.css">
</head>

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
        <p class="title-style text-center">Bienvenido a su perfil</p>
        <div class="text-center">
          <img src="../public/Images/imagesPP/icon-user.png" alt="Foto de perfil" width="200" height="200">
          <div class="mb-3">
            <label for="nombre_usr" class="form-label font-weight-bold parrafo-style">Hernán Hernández</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="cedula_usr" class="form-label font-weight-bold parrafo-style">Cedula:</label>
          <br>
          <div class="d-grid gap-2 mb-3">
            <input type="text" class="inputs-style" placeholder="X-XXX-XXXX" disabled>
          </div>
        </div>
        <div class="mb-3">
          <label for="facu_usr" class="form-label font-weight-bold parrafo-style">Facultad: </label>
          <br>
          <div class="d-grid gap-2 mb-3">
            <input type="text" class="inputs-style" placeholder="Facultad de Ingeniería de Sistemas Computacionales" disabled>
          </div>
        </div>
        <div class="mb-3">
          <label for="sede_usr" class="form-label font-weight-bold parrafo-style">Sede:</label>
          <br>
          <div class="d-grid gap-2 mb-3">
            <input type="text" class="inputs-style" placeholder="Panamá" disabled>
          </div>
        </div>
        <div class="mb-3">
          <form action="#">
            <label for="exampleInputPassword1" class="form-label font-weight-bold parrafo-style">Cambiar contraseña</label>
            <input type="email" name="correo" placeholder="Ingrese su correo" class="form-control mb-3 inputs-style" required>
            <input type="password" name="password" placeholder="Ingrese su contraseña" class="form-control mb-3 inputs-style" required><br>
            <div class="d-grid gap-2 mb-3">
              <button type="submit" class="btn-style">Guardar cambios</button>
            </div>
          </form>
        </div>
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