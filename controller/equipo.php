<?php
include "../class/Casco.php";
include "../class/Gafa.php";
include "../class/Zapatilla.php";

// Crear

if ($_POST["cat_equipo"] == "Casco") {
    $casco = new Casco(
        0,
        $_POST["img"],
        $_POST["nombre"],
        $_POST["precio"]
    );

    $respuesta = $casco->create();

    if ($respuesta == "OK") {
        header("location: ../equipo_2.php?codigo=1");
        exit();
    }
}

if ($_POST["cat_equipo"] == "Gafas") {
    $gafa = new Gafa(
        0,
        $_POST["img"],
        $_POST["nombre"],
        $_POST["precio"]
    );

    $respuesta = $gafa->create();

    if ($respuesta == "OK") {
        header("location: ../equipo_2.php?codigo=1");
        exit();
    }
}

if ($_POST["cat_equipo"] == "Zapatillas") {
    $zapatilla = new Zapatilla(
        0,
        $_POST["img"],
        $_POST["nombre"],
        $_POST["precio"]
    );

    $respuesta = $zapatilla->create();

    if ($respuesta == "OK") {
        header("location: ../equipo_2.php?codigo=1");
        exit();
    }
}

header("location: ../equipo_2.php?codigo=4&error=" . $respuesta);
exit();
