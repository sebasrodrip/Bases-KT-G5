<?php

include "Conexion.php";

class Usuario
{
    protected $id_usuario;
    /*protected $nombre;
    protected $apellido;*/
    protected $usuario;
    protected $contrasena;


    public function __construct($id_usuario, /*$nombre, $apellido, */ $usuario, $contrasena){
        $this->id_usuario=$id_usuario;
        /*$this->nombre=$nombre;
        $this->apellido=$apellido;*/
        $this->usuario=$usuario;
        $this->contrasena=$contrasena;
    }

    
    public static function getByUserName($user_name){
        $conexion = new Conexion();
        $conexion->conectar();
        $query= "SELECT * FROM usuario WHERE usuario = ?";

        $prepare = mysqli_prepare($conexion->link, $query);

        $prepare->bind_param("s", $user_name);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_row();

        $conexion->cerrar();

        if (!empty($dataArray)){
            return new Usuario($dataArray[0],/*$dataArray[1], $dataArray[2],*/$dataArray[1],$dataArray[2]);
        }

        return false;
    }

    public function validarClave($contrasena): bool
    {
         /* if ($this->contrasena == $contrasena) {
             return true;
         }else{
             return false;
         } */

        return $this->contrasena == $contrasena;
    }

    public function getUsuario(): string{
        return $this->usuario;
    }

    public function getCodigo(): int{
        return $this->id_usuario;
    }
} 

?>