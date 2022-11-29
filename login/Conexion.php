<?php

class Conexion{
    public $link;

    public function conectar(){
        $this->link = mysqli_connect("localhost", "root", "", "Ciclo", 3306);
    }

    public function cerrar(){
        $this->link->close();
    }
}