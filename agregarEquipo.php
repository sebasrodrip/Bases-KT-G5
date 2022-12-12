<?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";
  ?>
  <br><br>

  <h2>Agregar equipo</h2>
  <br>
  <section class="contenedor producto">

    <form class="form" action="controller/equipo.php" method="post">

        <div class="form_campo">
            <label for="cat_equipo">Categoria del equipo</label>
            <select class="form_text" name="cat_equipo" id="cat_equipo">
                <option value="0">--- Seleccione una categoria ---</option>
                <option value="Casco">Casco</option>
                <option value="Gafas">Gafas</option>
                <option value="Zapatillas">Zapatillas</option>
            </select>
        </div>

      <div>
        <div class="form_campo">
          <label for="img">Nombre de la imagen</label>
          <input id="img" name="img" class="form_text" type="text" placeholder="Ingrese el nombre de la imagen">
        </div>

        <div class="form_campo">
          <label for="nombre">Nombre</label>
          <input id="nombre" name="nombre" class="form_text" type="text" placeholder="Ingrese el nombre">
        </div>

        <div class="form_campo">
          <label for="precio">Precio</label>
          <input id="precio" name="precio" type="number" class="form_text" placeholder="Ingrese el precio del equipo"/>
        </div>
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