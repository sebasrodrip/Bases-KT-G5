  <?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";
  ?>
<html>
<body>
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
    <?php
      include "footer.php";
    ?>
</html>