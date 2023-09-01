<?php
session_start();

// Verificar si el usuario ha iniciado sesión,
// de lo contrario redirigir a la página de inicio de sesión
function check_session(){
    if(!isset($_SESSION['id_usuario'])){
        header("Location: login.php");
        exit();
    }
}

// Verificar si el usuario es un administrador

function check_admin(){
    if($_SESSION['rol'] != 1){
        header("Location: principal.php");
        exit();
    }
}
?>