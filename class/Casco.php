<?php
include "Conexion_casco.php";

class Casco extends Conexion_casco
{
    private $id_casco;
    private $img;
    private $nombre;
    private $precio;

    public function __construct($id_casco,  $img, $nombre, $precio)
    {
        $this->id_casco = $id_casco;
        $this->img = $img;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // CREATE

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO cascos(img, nombre, precio)" .
                "VALUES(?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        $prepare->bind_param(
            "ssi",
            $this->img,
            $this->nombre,
            $this->precio
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

        $query = "SELECT * FROM cascos";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $cascos = [];

        foreach ($dataArray as $data) {
            $casco = new Taller($data[0], $data[1], $data[2], $data[3], $data[4]);
            array_push($cascos, $casco);
        }

        return $cascos;
    }



    // METODOS GET Y SET


    public function getId_casco(): int
    {
        return $this->id_casco;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrecio(): int
    {
        return $this->precio;
    }

}