
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Bicicletas</title>
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
       
      </nav>
    </div>
  </header>

  <?php

  if (isset($_GET["codigo"])) {
    if ($_GET["codigo"] == "1") { 
      echo "<div class=\"alert alert-success\" role=\"alert\">Bicicleta agregada correctamente</div>";
    }
    if ($_GET["codigo"] == "4") { 
      echo "<div class=\"alert alert-danger\" role=\"alert\">" . $_GET["error"] . "</div>";
    }
  }

  ?>

  <img src="img/banner.jpg" class="banner-img" alt="">

  <section class="contenedor_bici">
    <!-- *********************************************  Sección de Bicicletas  ********************************************************************************************** -->
    <div class="boton_AddBike">
      <div style="text-align: center">
        <h2>Agregar Bicicleta</h2>
        <a class="boton" href="agregarBicicleta.html">Agregar</a>
        <br><br> <br>
      </div>
  </div>


    <h2>Catálogo de Bicicletas</h2>
 
    <div id="bicicletas" class="bicicletasGrid">

    </div>

    <br> <br> <br> <br> <br> <br> <br> <br> <br> 



    <!-- ********************************************* Fin Sección de Bicicletas  ********************************************************************************************** -->
  </section>

  <footer>
    <div class="footer-bottom">
      <p>Horario: Lunes a Sabado 8 AM a 5 PM / Domingos Cerrado</p>
      <p> <img src="img/redes/fb.png" alt="Auntoventas"> FideBikes <img src="img/redes/tw.png" alt=""> FideBikes
      </p>
      <p> <img src="img/redes/mail.png" alt="Auntoventas"> FideBikes@gmail.com <img src="img/redes/wp.png" alt="">
        FideBikes: 8888-8888 <br> </p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script src="JavaScript/script_bicicletas.js"></script>

</body>


</html>

