<?php

class Conexion_bicicleta{
    public $link;

    public function conectar(){
        $this->link = mysqli_connect("localhost", "root", "", "Ciclo", 3310);
    }

    public function cerrar(){
        $this->link->close();
    }
}