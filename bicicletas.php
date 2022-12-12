<?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";

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
        <a class="boton" href="agregarBicicleta.php">Agregar</a>
        <br><br><br>
      </div>
  </div>


    <h2>Catálogo de Bicicletas</h2>
 
    <div id="bicicletas" class="bicicletasGrid">

    </div>

    <br> <br> <br> <br> <br> <br> <br> <br> <br> 



    <!-- ********************************************* Fin Sección de Bicicletas  ********************************************************************************************** -->
  </section>
<script src="JavaScript/script_bicicletas.js"></script>
<?php
      include "footer.php";
?>
</html>

