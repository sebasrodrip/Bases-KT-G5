<?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";
  ?>

  <img src="img/taller.jpg" class="banner-img-taller" alt="">

  <section class="contenedor_bici">
    <!-- *********************************************  Sección de Taller  ********************************************************************************************** -->

    <h2>Mantenimientos en curso</h2>

    <div id="mantenimiento" class="mantenimientosGrid">

    </div>

    <br>

    <a class="boton" href="agregarMantenimiento.php">Agregar</a>



    <br><br>

  </section>

  <!-- ********************************************* Fin Sección de Taller  ********************************************************************************************** -->





  <script src="JavaScript/script.js"></script>

<?php
include "footer.php";
?>


</body>



</html>