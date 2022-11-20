<?php

$user = $_POST['user'];
$pass = $_POST['pass'];


if( $user == "admin@ufide.ac.cr" && $pass == "admin"){
?>
    <div class="alert alert-success" role="alert">
        Inicio de sesión correcto!
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        Usuario incorrecto!
    </div>
<?php
}
?>