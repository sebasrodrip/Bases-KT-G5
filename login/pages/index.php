<html>

<head>
  <title>Ciclo Zona Biker</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="../../style.css">
</head>

<body>

  <header>
    <div class="nav_bg">
      <nav class="nav_principal contenedor">
        <a href="index.html">Inicio</a>
        <a href="bicicletas.html">Bicicletas</a>
        <a href="equipo.html">Equipo</a>
        <a href="ubicacion.html">Ubicación</a>
        <a href="taller.html">Taller</a>
        <a href="sobreNosotros.html">Sobre Nosotros</a>
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
          Cerrar sesion
        </button>
        <svg style="text-align: right;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
          class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path
            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
      </nav>
    </div>
  </header>


<!-- Modal Login
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
Fin login modal-->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img\addict_4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-size: 36px">Bicicletas</h3>
            <a class="link_index" href="bicicletas.html">
              <p>Ver Bicicletas</p>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img\casco.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-size: 36px">Equipo</h3>
            <a class="link_index" href="equipo.html">
              <p>Ver Equipo</p>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img\taller.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-size: 36px">Taller</h3>
            <a class="link_index" href="taller.html">
              <p>Ver Taller</p>
            </a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  <footer>
    <div class="footer-bottom">
      <p>Horario: Lunes a Sabado 8 AM a 5 PM / Domingos Cerrado</p>
      <p> <img src="img/redes/fb.png" alt="Auntoventas"> FideBikes <img src="img/redes/tw.png" alt=""> FideBikes</p>
      <p> <img src="img/redes/mail.png" alt="Auntoventas"> FideBikes@gmail.com <img src="img/redes/wp.png" alt="">
        FideBikes: 8888-8888 <br> </p>
    </div>
  </footer>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> <!--Cambiar jQuery slim min a solo min con este script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> <!--Integrar en todos los html que contengan navbar-->
<script src="../../JavaScript/modal.js"></script> <!--Integrar en todos los html que contengan navbar-->

</html>