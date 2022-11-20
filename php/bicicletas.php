<?php
// Conexión a SQL
$conexion = mysqli_connect("localhost", "root", "", "Ciclo", 3310);

//consulta en código SQL
//$sql = "SELECT foto_bici as Fotografía, marca as Marca, arreglos as Arreglos_por_realizar FROM mantenimientos";

$sql= "SELECT * FROM bicicletas";


//Este devuelve la respuesta de la consulta la base de datos
$respuesta = mysqli_query($conexion, $sql);

if (mysqli_num_rows($respuesta) > 0) {
    
    $arreglo = array();

    // Así se imprimen los datos de una columna por medio de un array
    while ($row = mysqli_fetch_assoc($respuesta)) {
      
        $arreglo[] = $row;
    }
    //Cambia a formato json
    echo json_encode($arreglo);

} else {
    echo json_encode("Sin registros");
}