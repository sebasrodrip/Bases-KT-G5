<?php

include "Usuario.php";

$user = $_POST['user'];
$pass = $_POST['pass'];


if($user == "" && $pass == ""){
    ?>
    <div class="alert alert-warning" role="alert">
        Debe ingresar un usuario y una contraseña!
    </div>
<?php
}else if($pass == ""){
    ?>
    <div class="alert alert-warning" role="alert">
        Contraseña vacía!
</div>
<?php
} else if ($user == ""){
    ?>
    <div class="alert alert-warning" role="alert">
        Usuario vacío!
</div>
<?php
}

$usuario = Usuario::getByUserName($user);

if(!$usuario){
    ?>
    <div class="alert alert-danger" role="alert">
        Usuario no existe!
    </div>
    <?php
}

if ($usuario->validarClave($pass)) {
    session_start();
    $_SESSION["login"]=true;
    $_SESSION["usuario"]=$usuario->getUsuario();
    $_SESSION["codigo"]=$usuario->getCodigo();
    header("location: ../login/pages/admin.php");
    exit();
} else {
    ?>
    <div class="alert alert-warning" role="alert">
        Contraseña incorrecta!
    </div>
    <?php
}