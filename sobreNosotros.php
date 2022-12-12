<?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
include "header.php";
?>
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