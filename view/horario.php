<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horario de clases</title>

  <link rel="stylesheet" href="public/styles/bootstrap/bootstrap.min.css">
  <script src="public/styles/bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="public/styles/estilos/global.css">

  <style>
    @media (min-width:899px) {

      table th {
        border-bottom: 3px solid green;
        padding: 5px;
        width: 1080px;
      }

      table td {
        border-bottom: 1px solid green;
        padding-top: 8px;
        padding-bottom: 8px;
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
        padding-top: 8px;
        padding-bottom: 8px;
      }
    }
  </style>

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
        <div class="">
          <p class="title-style text-center">Horario de Clases</p>
        </div>
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
        <div id="div1">
          <table class="text-center">
            <thead>
              <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>7:00 AM - 8:00 AM</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
              </tr>
              <tr>
                <td>7:00 AM - 8:00 AM</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
              </tr>
              <tr>
                <td>7:00 AM - 8:00 AM</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
              </tr>
              <tr>
                <td>7:00 AM - 8:00 AM</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
              </tr>
              <tr>
                <td>7:00 AM - 8:00 AM</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
                <td>Español</td>
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