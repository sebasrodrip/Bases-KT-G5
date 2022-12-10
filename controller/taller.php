<?php
include "../class/Taller.php";

// Crear
$taller = new Taller(0,$_POST["foto_bici"], $_POST["marca"],
 $_POST["arreglos"], $_POST["id_usuario"]);

 $respuesta = $taller->create();

 if ($respuesta == "OK") {
    header("location: ../taller.html?codigo=1");
    exit();
 }

 header("location: ../taller.html?codigo=4&error=" . $respuesta);
 exit();