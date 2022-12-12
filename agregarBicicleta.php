<?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";
  ?>

  <img src="img/banner.jpg" class="banner-img" alt="">
  <br><br>

  <h2>Agregar Bicicleta al Inventario</h2>
  <br>
  <section class="contenedor producto">

    <form class="form" action="controller/bicicleta.php" method="post">
      <div>
        <div class="form_campo">
          <label for="img">Nombre de la imagen</label>
          <input id="img" name="img" class="form_text" type="text" placeholder="Ingrese el nombre de la imagen">
        </div>

        <div class="form_campo">
          <label for="nombre">Nombre de la Bicicleta</label>
          <input id="nombre" name="nombre" class="form_text" type="text" placeholder="Ingrese el nombre de la bicicleta">
        </div>

      <div class="form_campo">
        <label for="precio">Precio de la Bicicleta</label>
        <input id="precio" name="precio" class="form_text" type="text" placeholder="Escriba el precio de la bicicleta">
      </div>

      <div>
        <input class="boton enviar" type="submit" value="Agregar">
      </div>
    </form>

  </section>

  <br><br>

  </section>




  <footer>
    <div class="footer-bottom">
      <p>Horario: Lunes a Sabado 8 AM a 5 PM / Domingos Cerrado</p>
      <p> <img src="img/redes/fb.png" alt="Auntoventas"> FideBikes <img src="img/redes/tw.png" alt=""> FideBikes</p>
      <p> <img src="img/redes/mail.png" alt="Auntoventas"> FideBikes@gmail.com <img src="img/redes/wp.png" alt="">
        FideBikes: 8888-8888 <br> </p>
    </div>
  </footer>


  <script src="JavaScript/script_bicicletas.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>


</body>



</html>