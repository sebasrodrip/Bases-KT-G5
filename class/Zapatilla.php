<?php
include "Conexion_zapatilla.php";

class Zapatilla extends Conexion_zapatilla
{
    private $id_zapatilla;
    private $img;
    private $nombre;
    private $precio;

    public function __construct($id_zapatilla,  $img, $nombre, $precio)
    {
        $this->$id_zapatilla = $id_zapatilla;
        $this->img = $img;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // CREATE

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO zapatillas(img, nombre, precio)" .
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

        $query = "SELECT * FROM zapatillas";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $zapatillas = [];

        foreach ($dataArray as $data) {
            $zapatilla = new Taller($data[0], $data[1], $data[2], $data[3], $data[4]);
            array_push($zapatillas, $zapatilla);
        }

        return $zapatillas;
    }



    // METODOS GET Y SET


    public function getId_zapatilla(): int
    {
        return $this->id_zapatilla;
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