<?php
include "Conexion.php";

class Casco extends Conexion
{
    private $id_casco;
    private $img;
    private $nombre;
    private $precio;

    public function __construct($id_casco,  $img, $nombre, $precio)
    {
        $this->id_bicicleta = $id_bicicleta;
        $this->foto_bici = $foto_bici;
        $this->marca = $marca;
        $this->arreglos = $arreglos;
        $this->id_usuario = $id_usuario;
    }

    // METODOS (CRUD => CREATE, READ, UPDATE, DELETE)

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO mantenimientos(foto_bici, marca, arreglos, id_usuario)" .
                "VALUES(?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "ssss",
            $this->foto_bici,
            $this->marca,
            $this->arreglos,
            $this->id_usuario
        );

        if ($prepare->execute()) {
            $this->cerrar();
            return "OK";
        }else{
            $this->cerrar();
            return "Error: " . $prepare->error;
        }
        
    }

    // METODOS READ [STATIC]

    public static function getAll()
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM mantenimientos";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $mantenimientos = [];

        foreach ($dataArray as $data) {
            $mantenimiento = new Taller($data[0], $data[1], $data[2], $data[3], $data[4]);
            array_push($mantenimientos, $mantenimiento);
        }

        return $mantenimientos;
    }



    // METODOS GET Y SET


    public function getId_bicicleta(): int
    {
        return $this->id_bicicleta;
    }

    public function getFoto_bici(): string
    {
        return $this->foto_bici;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getArreglos(): string
    {
        return $this->arreglos;
    }

    public function getId_usuario(): string
    {
        return $this->id_usuario;
    }
}