<?php

class Conexion_casco{
    public $link;

    public function conectar(){
        $this->link = mysqli_connect("localhost", "root", "", "Ciclo", 3310);
    }

    public function cerrar(){
        $this->link->close();
    }
}