<?php

require('conexion.php');

// Variable de la consulta
$sql = "UPDATE usuarios
SET nombre = ?, apellido = ?, email = ?, fecha_nacimiento = ?
WHERE id_usuarios = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssi", $nombre, $apellido, $email, $fecha_nacimiento, $id_usuarios);

$nombre = "Fulano";
$apellido = "Merengue";
$email = "fulanito@gmail.com";
$fecha_nacimiento = "1995-01-01";
$id_usuarios = 8;

$stmt->execute();

?>