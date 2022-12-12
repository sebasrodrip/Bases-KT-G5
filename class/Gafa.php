<?php
include "Conexion_gafa.php";

class Gafa extends Conexion
{
    private $id_gafa;
    private $img;
    private $nombre;
    private $precio;

    public function __construct($id_gafa,  $img, $nombre, $precio)
    {
        $this->id_gafa = $id_gafa;
        $this->img = $img;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // CREATE

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO gafas(img, nombre, precio)" .
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

        $query = "SELECT * FROM gafas";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $gafas = [];

        foreach ($dataArray as $data) {
            $gafa = new Taller($data[0], $data[1], $data[2], $data[3], $data[4]);
            array_push($gafas, $gafa);
        }

        return $gafas;
    }



    // METODOS GET Y SET


    public function getId_gafa(): int
    {
        return $this->id_gafa;
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