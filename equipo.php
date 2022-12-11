<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Equipo</title>
</head>

<body>
  <header>
    <div class="nav_bg">
      <nav class="nav_principal contenedor">
        <a href="index.html">Inicio</a>
        <a href="bicicletas.html">Bicicletas</a>
        <a href="equipo.php">Equipo</a>
        <a href="ubicacion.html">Ubicación</a>
        <a href="taller.html">Taller</a>
        <a href="sobreNosotros.html">Sobre Nosotros</a>
        <svg style="text-align: right;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
      </nav>
    </div>
  </header>

  <br>
  <br>

  <?php

  if (isset($_GET["codigo"])) {
    if ($_GET["codigo"] == "1") { // CREADO
      echo "<div class=\"alert alert-success\" role=\"alert\">Equipo agregado correctamente</div>";
    }
    if ($_GET["codigo"] == "4") { // ERROR
      echo "<div class=\"alert alert-danger\" role=\"alert\">" . $_GET["error"] . "</div>";
    }
  }

  ?>

  <div style="text-align: center">
    <h3 style="font-size: 32px">Agregar Equipo</h3>
    <br>
    <a class="boton" href="agregarEquipo.html">Agregar</a>
  </div>

  <br>
  <br>

  <section class="imagen_cascos">
    <div class="titulo_imagen">
      <h2>Cascos</h2>
    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="contenedor_equipo">
    <div id="cascos" class="equipos">

    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="imagen_zapatillas">
    <div class="titulo_imagen">
      <h2>Zapatillas</h2>
    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="contenedor_equipo">
    <div id="zapatillas" class="equipos">

    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="imagen_gafas">
    <div class="titulo_imagen">
      <h2>Gafas</h2>
    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="contenedor_equipo">
    <div id="gafas" class="equipos">

    </div>
  </section>

  <br>
  <br>
  <br>

  <footer>
    <div class="footer-bottom">
      <p>Horario: Lunes a Sabado 8 AM a 5 PM / Domingos Cerrado</p>
      <p> <img src="img/redes/fb.png" alt="Auntoventas"> FideBikes <img src="img/redes/tw.png" alt=""> FideBikes</p>
      <p> <img src="img/redes/mail.png" alt="Auntoventas"> FideBikes@gmail.com <img src="img/redes/wp.png" alt="">
        FideBikes: 8888-8888 <br> </p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

  <script src="JavaScript/script_equipo.js"></script>



</body>

</html>