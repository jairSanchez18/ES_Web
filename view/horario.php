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
      #div1{
        margin: 10px;
        font-size: 12px;
      }
    }

    @media (max-width:900px) {
      #div1 {
        margin: 2px;
        overflow-x: auto;
      }

      #div1 {
        font-size: 12px;
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
        <div id="div1">
          <div class="row mt-5 text-center">
            <div class="col border border-dark"><strong>Hora</strong><br>
              <?php foreach ($hora as $h) { ?>
                <p class="border-top border-dark pt-2"><?php echo $h->hora_entrada; echo "-"; echo $h->hora_salida ?> <br> -</p>
              <?php } ?>
            </div>
            <div class="col border border-dark"><strong>Lunes</strong><br>
              <?php foreach ($lunes as $l) { ?>
                <p class="border-top border-dark pt-2"><?php echo $l->materia; ?> <br> <?php echo $l->salon; ?></p>
              <?php } ?>
            </div>
            <div class="col border border-dark"><strong>Martes</strong><br>
              <?php foreach ($martes as $m) { ?>
                <p class="border-top border-dark pt-2"><?php echo $m->materia; ?> <br> <?php echo $m->salon; ?></p>
              <?php } ?>
            </div>
            <div class="col border border-dark"><strong>Miercoles</strong><br>
              <?php foreach ($miercoles as $mi) { ?>
                <p class="border-top border-dark pt-2"><?php echo $mi->materia; ?> <br> <?php echo $mi->salon; ?></p>
              <?php } ?>
            </div>
            <div class="col border border-dark"><strong>Jueves</strong><br>
              <?php foreach ($jueves as $j) { ?>
                <p class="border-top border-dark pt-2"><?php echo $j->materia; ?> <br> <?php echo $j->salon; ?></p>
              <?php } ?>
            </div>
            <div class="col border border-dark"><strong>Viernes</strong><br>
              <?php foreach ($viernes as $v) { ?>
                <p class="border-top border-dark pt-2"><?php echo $v->materia; ?> <br> <?php echo $v->salon; ?></p>
              <?php } ?>
            </div>
            <div class="col border border-dark"><strong>Sabado</strong><br>
              <?php foreach ($sabado as $s) { ?>
                <p class="border-top border-dark pt-2"><?php echo $s->materia; ?> <br> <?php echo $s->salon; ?></p>
              <?php } ?>
            </div>
          </div>
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