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
    <title>Ubicación</title>
    <?php
  session_start();

  if (isset($_SESSION["login"])) {
    echo "<script>document.location='admin.php';</script>";
    exit();
  }
  ?>

</head>

<body class="ubicacionIMG">
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

    <h1
        style="text-align:center; padding-top: 15px; padding-bottom: 10px; font-family: sans-serif; font-size: 42px; font-style: italic;">
        Estamos Ubicados en:</h1>
    <h2
        style="text-align:center; padding-top: 5px; padding-bottom: 40px; font-family: sans-serif; font-size: 28px; font-style: italic; ">
        100 mts Oeste del Servicentro ALYMO Grecia, Alajuela</h2>

    <div class="ubicacion">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.23737226415!2d-84.31133120670215!3d10.072793254202905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0585463ee0c45%3A0x4e2dbf9cb1e5821d!2sCiclo%20Cuco!5e0!3m2!1ses-419!2scr!4v1668333115205!5m2!1ses-419!2scr"
            width="1200" height="750" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</body>

<br><br><br><br><br><br>

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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> <!--Cambiar jQuery slim min a solo min con este script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> <!--Integrar en todos los html que contengan navbar-->
<script src="JavaScript/modal.js"></script> <!--Integrar en todos los html que contengan navbar-->
</html>