<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">

  <?php
  session_start();

  if (isset($_SESSION["login"])) {
    echo "<script>document.location='admin.php';</script>";
    exit();
  }
  ?>

  <title>Taller</title>
</head>

<header>
  <div class="nav_bg">
    <nav class="nav_principal contenedor">
      <a href="index.php">Inicio</a>
      <a href="bicicletas_2.php">Bicicletas</a>
      <a href="equipo_2.php">Equipo</a>
      <a href="ubicacion_2.php">Ubicación</a>
      <a href="taller_2.php">Taller</a>
      <a href="sobreNosotros_2.php">Sobre Nosotros</a>
      <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
        Ingresar
      </button>
    </nav>
  </div>
</header>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalTitle">Iniciar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="email" class="form-control" id="user" placeholder="ejemplo@domain.com">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" id="pass" class="form-control" placeholder="una contraseña fácil">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group" id="respuesta"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary" id="btn-login">Login</button>
      </div>
    </div>
  </div>
</div>

<img src="img/taller.jpg" class="banner-img-taller" alt="">

<section class="contenedor_bici">
  <!-- *********************************************  Sección de Taller  ********************************************************************************************** -->

  <h2>Mantenimientos en curso</h2>

  <div id="mantenimiento" class="mantenimientosGrid">

  </div>

  <br>
  <br><br>

</section>

<!-- ********************************************* Fin Sección de Taller  ********************************************************************************************** -->





<script src="JavaScript/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!--Cambiar jQuery slim min a solo min con este script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
  integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--Integrar en todos los html que contengan navbar-->
<script src="JavaScript/modal.js"></script> <!--Integrar en todos los html que contengan navbar-->

<?php
include "footer.php";
?>


</body>



</html>