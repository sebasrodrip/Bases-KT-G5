  <?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";
  ?>

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
    <a class="boton" href="agregarEquipo.php">Agregar</a>
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
  <?php
  include "footer.php";
  ?>
  <script src="JavaScript/script_equipo.js"></script>
</body>
</html>