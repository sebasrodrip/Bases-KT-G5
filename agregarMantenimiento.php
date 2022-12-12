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
  <br><br>

  <h2>Agregar bicicleta a mantenimiento</h2>
  <br>
  <section class="contenedor producto">

    <form class="form" action="controller/taller.php" method="post">
      <div>
        <div class="form_campo">
          <label for="foto_bici">Nombre de la imagen</label>
          <input id="foto_bici" name="foto_bici" class="form_text" type="text" placeholder="Ingrese el nombre de la imagen">
        </div>

        <div class="form_campo">
          <label for="marca">Marca</label>
          <input id="marca" name="marca" class="form_text" type="text" placeholder="Ingrese la marca">
        </div>

        <div class="form_campo">
          <label for="arreglos">Arreglos</label>
          <textarea id="arreglos" name="arreglos" class="form_text" placeholder="Ingrese los arreglos que se necesitan"></textarea>
        </div>
      </div>

      <div class="form_campo">
        <label for="id_usuario">ID de Usuario</label>
        <input id="id_usuario" name="id_usuario" class="form_text" type="text" placeholder="Escriba la identificación del usuario">
      </div>

      <div>
        <input class="boton enviar" type="submit" value="Agregar">
      </div>
    </form>

  </section>

  <br><br>

  </section>



  <script src="JavaScript/script.js"></script>

  <?php
  include "footer.php";
  ?>
</body>



</html>