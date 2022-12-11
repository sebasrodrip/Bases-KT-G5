<?php
include "Conexion_bicicleta.php";

class Bicicleta extends Conexion_bicicleta
{
    private $id_bicicletas;
    private $img;
    private $nombre;
    private $precio;

    public function __construct($id_bicicletas, $img, $nombre, $precio,)
    {
        $this->id_bicicletas = $id_bicicletas;
        $this->img = $img;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // METODOS (CRUD => CREATE, READ, UPDATE, DELETE)

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO bicicletas(id_bicicletas, img, nombre, precio)" .
                "VALUES(?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "ssss",
            $this->id_bicicletas,
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

        $query = "SELECT * FROM bicicletas";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $bicicletas = [];

        foreach ($dataArray as $data) {
            $bicicletas = new bicicletas($data[0], $data[1], $data[2], $data[3]);
            array_push($bicicletas, $bicicleta);
        }

        return $bicicletas;
    }



    // METODOS GET Y SET


    public function getId_bicicletas(): int
    {
        return $this->id_bicicletas;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrecio(): string
    {
        return $this->precio;
    }
}