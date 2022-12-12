<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="style.css">
    <title>Sobre Nosotros</title>
    <!-- <?php
    session_start();
  
    if(isset($_SESSION["login"])){
      echo "<script>document.location='admin.php';</script>";
      exit();
    }
    ?> -->
</head>

<body>
<header>
    <div class="nav_bg">
      <nav class="nav_principal contenedor">
        <a href="index.php">Inicio</a>
        <a href="bicicletas_2.php">Bicicletas</a>
        <a href="equipo.html">Equipo</a>
        <a href="ubicacion_2.php">Ubicación</a>
        <a href="taller_2.php">Taller</a>
        <a href="sobreNosotros_2.php">Sobre Nosotros</a>
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
          Ingresar
        </button>
      </nav>
    </div>
  </header>


<!-- Modal Login -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<!--Fin login modal-->

    <section class="sobre">
        <div class="mainSobre">
            <div class="sobre-texto">
                <section class="card">
                    <div class="card-contenedor">
                        <h1>Sobre Nosotros</h1>
                        <h5>Nuestra Historia</h5>
                        <p> Nuestra ciclo el 24 de Noviembre de 2002 en el centro de Grecia, provincia de Alajuela. Al
                            existir una gran pasión por el ciclismo
                            fuí motivado para construir un ciclo dedicado a servir a los amantes del ciclismo y
                            satisfacer las necesidades de los usuarios del cicle FideBikes.

                            Una de los objetivos principales de FideBikes es ser una empresa que se caracterice por su
                            calidad, servicio y atención al cliente. A la vez que sea considerada como punto de
                            referencia de nuestros competidores y ser la marca preferida del consumidor.

                            Otro de los objetivos del ciclo es garantizar la calidad de nuestros procesos y servicios
                            para lograr una fuerte presencia y el
                            reconocimiento internacional de nuestras marcas y la amplia gama de productos. </p>
                        <!-- <button class="sobreBoton">Contáctanos</button> -->
                    </div>
            </div>
        </div>
        </div>
    </section>
</body>

<?php
include "footer.php";
?>
</html>