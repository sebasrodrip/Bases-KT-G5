<?php

$conexion = mysqli_connect("localhost", "root", "", "Ciclo", 3306);

$sql = "SELECT img,nombre,precio FROM cascos";

$respuesta = mysqli_query($conexion, $sql);

if (mysqli_num_rows($respuesta) > 0) {

    $arreglo = array();

    while ($row = mysqli_fetch_assoc($respuesta)) {
       $arreglo[] = $row;
    }

    echo json_encode($arreglo);

} else {
    echo json_encode("Sin Registros Disponibles");
}