<?php
include "../class/Bicicleta.php";

// Crear
$bicicleta = new Bicicleta(0, $_POST["img"],
 $_POST["nombre"], $_POST["precio"]);

 $respuesta = $bicicleta->create();

 if ($respuesta == "OK") {
    header("location: ../bicicletas.php?codigo=1");
    exit();
 }

 header("location: ../bicicletas.php?codigo=4&error=" . $respuesta);
 exit();